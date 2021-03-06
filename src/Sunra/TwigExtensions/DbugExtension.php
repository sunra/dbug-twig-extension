<?php

namespace Sunra\TwigExtensions;


//use Symfony\Component\DependencyInjection\ContainerInterface;

class DbugExtension extends \Twig_Extension
{/*
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getContainer()
    {
        return $this->container;
    }*/

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter(
                'dbug',
                array($this, 'sunra_dbug'),
                array('is_safe' => array('html'))
            ),
            new \Twig_SimpleFilter(
                'd',
                array($this, 'sunra_dbug'),
                array('is_safe' => array('html'))
            )
        );
    }
    
/*    public function getFunctions()
    {
    	return array(
    		'ladybug_dump'  => new \Twig_Function_Method($this, 'ladybug_dump', array('is_safe' => array('html'))),
    		'ld'  => new \Twig_Function_Method($this, 'ladybug_dump', array('is_safe' => array('html')))
    	);
    }
*/
    public function sunra_dbug( $var, $forceType="", $bCollapsed=false, $var_name='' )
    {
		ob_start();
		new \Ospinto\dBug($var, $forceType, $bCollapsed, $var_name);
		$html = ob_get_contents();	
		ob_end_clean();
		
        return $html;
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'dbug_extension';
    }
}
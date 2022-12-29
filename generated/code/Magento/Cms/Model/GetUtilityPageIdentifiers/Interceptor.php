<?php
namespace Magento\Cms\Model\GetUtilityPageIdentifiers;

/**
 * Interceptor class for @see \Magento\Cms\Model\GetUtilityPageIdentifiers
 */
class Interceptor extends \Magento\Cms\Model\GetUtilityPageIdentifiers implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($scopeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}

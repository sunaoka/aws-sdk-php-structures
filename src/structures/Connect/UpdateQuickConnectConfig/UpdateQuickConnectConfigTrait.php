<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQuickConnectConfig;

trait UpdateQuickConnectConfigTrait
{
    /**
     * @param UpdateQuickConnectConfigRequest $args
     * @return void
     */
    public function updateQuickConnectConfig(UpdateQuickConnectConfigRequest $args)
    {
        parent::updateQuickConnectConfig($args->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateControlPanel;

trait CreateControlPanelTrait
{
    /**
     * @param CreateControlPanelRequest $args
     * @return CreateControlPanelResponse
     */
    public function createControlPanel(CreateControlPanelRequest $args)
    {
        $result = parent::createControlPanel($args->toArray());
        return new CreateControlPanelResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListControlPanels;

trait ListControlPanelsTrait
{
    /**
     * @param ListControlPanelsRequest $args
     * @return ListControlPanelsResponse
     */
    public function listControlPanels(ListControlPanelsRequest $args)
    {
        $result = parent::listControlPanels($args->toArray());
        return new ListControlPanelsResponse($result->toArray());
    }
}

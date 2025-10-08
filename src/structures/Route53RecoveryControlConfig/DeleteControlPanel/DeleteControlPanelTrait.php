<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DeleteControlPanel;

trait DeleteControlPanelTrait
{
    /**
     * @param DeleteControlPanelRequest $args
     * @return DeleteControlPanelResponse
     */
    public function deleteControlPanel(DeleteControlPanelRequest $args)
    {
        $result = parent::deleteControlPanel($args->toArray());
        return new DeleteControlPanelResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\UpdateControlPanel;

trait UpdateControlPanelTrait
{
    /**
     * @param UpdateControlPanelRequest $args
     * @return UpdateControlPanelResponse
     */
    public function updateControlPanel(UpdateControlPanelRequest $args)
    {
        $result = parent::updateControlPanel($args->toArray());
        return new UpdateControlPanelResponse($result->toArray());
    }
}

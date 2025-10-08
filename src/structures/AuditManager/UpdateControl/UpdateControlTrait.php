<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateControl;

trait UpdateControlTrait
{
    /**
     * @param UpdateControlRequest $args
     * @return UpdateControlResponse
     */
    public function updateControl(UpdateControlRequest $args)
    {
        $result = parent::updateControl($args->toArray());
        return new UpdateControlResponse($result->toArray());
    }
}

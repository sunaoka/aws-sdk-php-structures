<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateSecurityControl;

trait UpdateSecurityControlTrait
{
    /**
     * @param UpdateSecurityControlRequest $args
     * @return UpdateSecurityControlResponse
     */
    public function updateSecurityControl(UpdateSecurityControlRequest $args)
    {
        $result = parent::updateSecurityControl($args->toArray());
        return new UpdateSecurityControlResponse($result->toArray());
    }
}

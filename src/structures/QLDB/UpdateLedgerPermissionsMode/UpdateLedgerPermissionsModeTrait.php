<?php

namespace Sunaoka\Aws\Structures\QLDB\UpdateLedgerPermissionsMode;

trait UpdateLedgerPermissionsModeTrait
{
    /**
     * @param UpdateLedgerPermissionsModeRequest $args
     * @return UpdateLedgerPermissionsModeResponse
     */
    public function updateLedgerPermissionsMode(UpdateLedgerPermissionsModeRequest $args)
    {
        $result = parent::updateLedgerPermissionsMode($args->toArray());
        return new UpdateLedgerPermissionsModeResponse($result->toArray());
    }
}

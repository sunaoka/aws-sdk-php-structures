<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CopyBackupToRegion;

trait CopyBackupToRegionTrait
{
    /**
     * @param CopyBackupToRegionRequest $args
     * @return CopyBackupToRegionResponse
     */
    public function copyBackupToRegion(CopyBackupToRegionRequest $args)
    {
        $result = parent::copyBackupToRegion($args->toArray());
        return new CopyBackupToRegionResponse($result->toArray());
    }
}

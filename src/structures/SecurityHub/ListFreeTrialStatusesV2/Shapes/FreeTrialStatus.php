<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListFreeTrialStatusesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECURITY_HUB_V2'|'SECURITY_HUB_V2_MULTI_CLOUD_AZURE' $FeatureType
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult $ExpiresAt
 */
class FreeTrialStatus extends Shape
{
    /**
     * @param array{
     *     FeatureType: 'SECURITY_HUB_V2'|'SECURITY_HUB_V2_MULTI_CLOUD_AZURE',
     *     Status: 'ACTIVE'|'INACTIVE',
     *     StartedAt: \Aws\Api\DateTimeResult,
     *     ExpiresAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

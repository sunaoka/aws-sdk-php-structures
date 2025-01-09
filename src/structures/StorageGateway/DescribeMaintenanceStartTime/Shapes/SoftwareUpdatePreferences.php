<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeMaintenanceStartTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL_VERSIONS'|'EMERGENCY_VERSIONS_ONLY' $AutomaticUpdatePolicy
 */
class SoftwareUpdatePreferences extends Shape
{
    /**
     * @param array{AutomaticUpdatePolicy?: 'ALL_VERSIONS'|'EMERGENCY_VERSIONS_ONLY'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

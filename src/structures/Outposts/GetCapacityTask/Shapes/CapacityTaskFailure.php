<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCapacityTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Reason
 * @property 'UNSUPPORTED_CAPACITY_CONFIGURATION'|'UNEXPECTED_ASSET_STATE'|'BLOCKING_INSTANCES_NOT_EVACUATED'|'INTERNAL_SERVER_ERROR'|'RESOURCE_NOT_FOUND'|null $Type
 */
class CapacityTaskFailure extends Shape
{
    /**
     * @param array{
     *     Reason: string,
     *     Type?: 'UNSUPPORTED_CAPACITY_CONFIGURATION'|'UNEXPECTED_ASSET_STATE'|'BLOCKING_INSTANCES_NOT_EVACUATED'|'INTERNAL_SERVER_ERROR'|'RESOURCE_NOT_FOUND'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

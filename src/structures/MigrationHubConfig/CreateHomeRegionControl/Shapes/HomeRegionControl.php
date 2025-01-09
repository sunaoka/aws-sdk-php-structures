<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig\CreateHomeRegionControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ControlId
 * @property string $HomeRegion
 * @property Target $Target
 * @property \Aws\Api\DateTimeResult $RequestedTime
 */
class HomeRegionControl extends Shape
{
    /**
     * @param array{
     *     ControlId?: string,
     *     HomeRegion?: string,
     *     Target?: Target,
     *     RequestedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

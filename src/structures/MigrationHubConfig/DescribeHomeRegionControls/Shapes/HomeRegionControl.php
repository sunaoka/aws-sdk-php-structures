<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig\DescribeHomeRegionControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ControlId
 * @property string|null $HomeRegion
 * @property Target|null $Target
 * @property \Aws\Api\DateTimeResult|null $RequestedTime
 */
class HomeRegionControl extends Shape
{
    /**
     * @param array{
     *     ControlId?: string|null,
     *     HomeRegion?: string|null,
     *     Target?: Target|null,
     *     RequestedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

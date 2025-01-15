<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BlockDurationMinutes
 * @property string|null $InstanceInterruptionBehavior
 * @property string|null $MaxPrice
 * @property string|null $SpotInstanceType
 * @property string|null $ValidUntil
 */
class AwsEc2LaunchTemplateDataInstanceMarketOptionsSpotOptionsDetails extends Shape
{
    /**
     * @param array{
     *     BlockDurationMinutes?: int|null,
     *     InstanceInterruptionBehavior?: string|null,
     *     MaxPrice?: string|null,
     *     SpotInstanceType?: string|null,
     *     ValidUntil?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

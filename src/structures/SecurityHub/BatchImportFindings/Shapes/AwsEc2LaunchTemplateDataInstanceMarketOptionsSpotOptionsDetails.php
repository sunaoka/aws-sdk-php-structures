<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BlockDurationMinutes
 * @property string $InstanceInterruptionBehavior
 * @property string $MaxPrice
 * @property string $SpotInstanceType
 * @property string $ValidUntil
 */
class AwsEc2LaunchTemplateDataInstanceMarketOptionsSpotOptionsDetails extends Shape
{
    /**
     * @param array{
     *     BlockDurationMinutes?: int,
     *     InstanceInterruptionBehavior?: string,
     *     MaxPrice?: string,
     *     SpotInstanceType?: string,
     *     ValidUntil?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

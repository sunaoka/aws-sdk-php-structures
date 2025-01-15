<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PT1S'|'PT5S'|'PT10S'|'PT15S'|'PT30S'|'PT1M'|'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H'|null $TargetSamplingRate
 */
class DataPreProcessingConfiguration extends Shape
{
    /**
     * @param array{TargetSamplingRate?: 'PT1S'|'PT5S'|'PT10S'|'PT15S'|'PT30S'|'PT1M'|'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

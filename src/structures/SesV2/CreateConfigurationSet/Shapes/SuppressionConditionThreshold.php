<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $ConditionThresholdEnabled
 * @property SuppressionConfidenceThreshold|null $OverallConfidenceThreshold
 */
class SuppressionConditionThreshold extends Shape
{
    /**
     * @param array{
     *     ConditionThresholdEnabled: 'ENABLED'|'DISABLED',
     *     OverallConfidenceThreshold?: SuppressionConfidenceThreshold|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

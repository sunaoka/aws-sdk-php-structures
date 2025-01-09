<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleName
 * @property LateDataRuleConfiguration $ruleConfiguration
 */
class LateDataRule extends Shape
{
    /**
     * @param array{
     *     ruleName?: string,
     *     ruleConfiguration: LateDataRuleConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

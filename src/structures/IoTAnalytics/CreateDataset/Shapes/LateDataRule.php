<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ruleName
 * @property LateDataRuleConfiguration $ruleConfiguration
 */
class LateDataRule extends Shape
{
    /**
     * @param array{
     *     ruleName?: string|null,
     *     ruleConfiguration: LateDataRuleConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

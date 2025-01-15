<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafv2RulesActionDetails|null $Action
 * @property string|null $Name
 * @property string|null $OverrideAction
 * @property int|null $Priority
 * @property AwsWafv2VisibilityConfigDetails|null $VisibilityConfig
 */
class AwsWafv2RulesDetails extends Shape
{
    /**
     * @param array{
     *     Action?: AwsWafv2RulesActionDetails|null,
     *     Name?: string|null,
     *     OverrideAction?: string|null,
     *     Priority?: int|null,
     *     VisibilityConfig?: AwsWafv2VisibilityConfigDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

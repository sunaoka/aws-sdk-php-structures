<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafv2RulesActionDetails $Action
 * @property string $Name
 * @property string $OverrideAction
 * @property int $Priority
 * @property AwsWafv2VisibilityConfigDetails $VisibilityConfig
 */
class AwsWafv2RulesDetails extends Shape
{
    /**
     * @param array{
     *     Action?: AwsWafv2RulesActionDetails,
     *     Name?: string,
     *     OverrideAction?: string,
     *     Priority?: int,
     *     VisibilityConfig?: AwsWafv2VisibilityConfigDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

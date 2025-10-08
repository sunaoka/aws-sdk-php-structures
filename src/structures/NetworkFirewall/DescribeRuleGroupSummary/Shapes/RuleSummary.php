<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroupSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SID
 * @property string|null $Msg
 * @property string|null $Metadata
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     SID?: string|null,
     *     Msg?: string|null,
     *     Metadata?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

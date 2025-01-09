<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $RuleId
 */
class DescribeRuleRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     RuleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

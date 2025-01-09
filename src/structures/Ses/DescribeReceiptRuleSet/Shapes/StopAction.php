<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RuleSet' $Scope
 * @property string $TopicArn
 */
class StopAction extends Shape
{
    /**
     * @param array{
     *     Scope: 'RuleSet',
     *     TopicArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

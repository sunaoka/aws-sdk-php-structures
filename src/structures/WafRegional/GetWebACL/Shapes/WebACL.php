<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WebACLId
 * @property string $Name
 * @property string $MetricName
 * @property WafAction $DefaultAction
 * @property list<ActivatedRule> $Rules
 * @property string $WebACLArn
 */
class WebACL extends Shape
{
    /**
     * @param array{
     *     WebACLId: string,
     *     Name?: string,
     *     MetricName?: string,
     *     DefaultAction: WafAction,
     *     Rules: list<ActivatedRule>,
     *     WebACLArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

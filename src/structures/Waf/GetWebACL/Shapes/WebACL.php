<?php

namespace Sunaoka\Aws\Structures\Waf\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WebACLId
 * @property string|null $Name
 * @property string|null $MetricName
 * @property WafAction $DefaultAction
 * @property list<ActivatedRule> $Rules
 * @property string|null $WebACLArn
 */
class WebACL extends Shape
{
    /**
     * @param array{
     *     WebACLId: string,
     *     Name?: string|null,
     *     MetricName?: string|null,
     *     DefaultAction: WafAction,
     *     Rules: list<ActivatedRule>,
     *     WebACLArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeInsightRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $State
 * @property string $Schema
 * @property string $Definition
 * @property bool $ManagedRule
 */
class InsightRule extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     State: string,
     *     Schema: string,
     *     Definition: string,
     *     ManagedRule?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

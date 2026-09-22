<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SQL'|'PROMQL' $language
 * @property string $expression
 */
class AlertRuleQuery extends Shape
{
    /**
     * @param array{
     *     language: 'SQL'|'PROMQL',
     *     expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

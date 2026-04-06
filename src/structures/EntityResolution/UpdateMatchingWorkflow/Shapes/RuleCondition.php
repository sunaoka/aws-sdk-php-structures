<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleName
 * @property string $condition
 */
class RuleCondition extends Shape
{
    /**
     * @param array{
     *     ruleName: string,
     *     condition: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

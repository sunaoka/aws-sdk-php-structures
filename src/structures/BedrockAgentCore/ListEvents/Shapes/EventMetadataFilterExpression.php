<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LeftExpression $left
 * @property 'EQUALS_TO'|'EXISTS'|'NOT_EXISTS' $operator
 * @property RightExpression|null $right
 */
class EventMetadataFilterExpression extends Shape
{
    /**
     * @param array{
     *     left: LeftExpression,
     *     operator: 'EQUALS_TO'|'EXISTS'|'NOT_EXISTS',
     *     right?: RightExpression|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

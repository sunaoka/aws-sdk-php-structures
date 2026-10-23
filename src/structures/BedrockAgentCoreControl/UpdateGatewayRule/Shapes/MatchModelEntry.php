<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property 'StringEquals'|'StringLike'|null $operator
 */
class MatchModelEntry extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     operator?: 'StringEquals'|'StringLike'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

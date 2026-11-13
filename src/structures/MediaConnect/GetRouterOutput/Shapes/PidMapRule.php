<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MatchExpression
 * @property string $Action
 */
class PidMapRule extends Shape
{
    /**
     * @param array{
     *     MatchExpression: string,
     *     Action: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

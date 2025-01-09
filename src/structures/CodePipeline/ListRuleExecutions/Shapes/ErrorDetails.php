<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $message
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{
     *     code?: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

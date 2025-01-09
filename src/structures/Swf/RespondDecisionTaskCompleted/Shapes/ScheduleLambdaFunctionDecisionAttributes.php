<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $control
 * @property string $input
 * @property string $startToCloseTimeout
 */
class ScheduleLambdaFunctionDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     control?: string,
     *     input?: string,
     *     startToCloseTimeout?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

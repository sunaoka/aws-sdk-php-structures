<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string|null $control
 * @property string|null $input
 * @property string|null $startToCloseTimeout
 */
class ScheduleLambdaFunctionDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     control?: string|null,
     *     input?: string|null,
     *     startToCloseTimeout?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

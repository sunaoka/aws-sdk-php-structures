<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stateName
 * @property OnInputLifecycle $onInput
 * @property OnEnterLifecycle $onEnter
 * @property OnExitLifecycle $onExit
 */
class State extends Shape
{
    /**
     * @param array{
     *     stateName: string,
     *     onInput?: OnInputLifecycle,
     *     onEnter?: OnEnterLifecycle,
     *     onExit?: OnExitLifecycle
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTEvents\StartDetectorModelAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stateName
 * @property OnInputLifecycle|null $onInput
 * @property OnEnterLifecycle|null $onEnter
 * @property OnExitLifecycle|null $onExit
 */
class State extends Shape
{
    /**
     * @param array{
     *     stateName: string,
     *     onInput?: OnInputLifecycle|null,
     *     onEnter?: OnEnterLifecycle|null,
     *     onExit?: OnExitLifecycle|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

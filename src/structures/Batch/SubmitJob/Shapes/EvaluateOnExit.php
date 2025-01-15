<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $onStatusReason
 * @property string|null $onReason
 * @property string|null $onExitCode
 * @property 'RETRY'|'EXIT' $action
 */
class EvaluateOnExit extends Shape
{
    /**
     * @param array{
     *     onStatusReason?: string|null,
     *     onReason?: string|null,
     *     onExitCode?: string|null,
     *     action: 'RETRY'|'EXIT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

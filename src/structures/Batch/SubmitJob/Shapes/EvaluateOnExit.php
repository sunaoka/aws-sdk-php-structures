<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $onStatusReason
 * @property string $onReason
 * @property string $onExitCode
 * @property 'RETRY'|'EXIT' $action
 */
class EvaluateOnExit extends Shape
{
    /**
     * @param array{
     *     onStatusReason?: string,
     *     onReason?: string,
     *     onExitCode?: string,
     *     action: 'RETRY'|'EXIT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\RunMicrovm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, max> $maxIdleDurationSeconds
 * @property int<0, max> $suspendedDurationSeconds
 * @property bool $autoResumeEnabled
 */
class IdlePolicy extends Shape
{
    /**
     * @param array{
     *     maxIdleDurationSeconds: int<60, max>,
     *     suspendedDurationSeconds: int<0, max>,
     *     autoResumeEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

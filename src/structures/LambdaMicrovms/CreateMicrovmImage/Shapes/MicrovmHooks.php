<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\CreateMicrovmImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $run
 * @property int<1, 60>|null $runTimeoutInSeconds
 * @property 'DISABLED'|'ENABLED'|null $resume
 * @property int<1, 60>|null $resumeTimeoutInSeconds
 * @property 'DISABLED'|'ENABLED'|null $suspend
 * @property int<1, 60>|null $suspendTimeoutInSeconds
 * @property 'DISABLED'|'ENABLED'|null $terminate
 * @property int<1, 60>|null $terminateTimeoutInSeconds
 */
class MicrovmHooks extends Shape
{
    /**
     * @param array{
     *     run?: 'DISABLED'|'ENABLED'|null,
     *     runTimeoutInSeconds?: int<1, 60>|null,
     *     resume?: 'DISABLED'|'ENABLED'|null,
     *     resumeTimeoutInSeconds?: int<1, 60>|null,
     *     suspend?: 'DISABLED'|'ENABLED'|null,
     *     suspendTimeoutInSeconds?: int<1, 60>|null,
     *     terminate?: 'DISABLED'|'ENABLED'|null,
     *     terminateTimeoutInSeconds?: int<1, 60>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

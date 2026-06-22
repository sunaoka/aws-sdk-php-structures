<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\UpdateMicrovmImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $ready
 * @property int<1, 3600>|null $readyTimeoutInSeconds
 * @property 'DISABLED'|'ENABLED'|null $validate
 * @property int<1, 3600>|null $validateTimeoutInSeconds
 */
class MicrovmImageHooks extends Shape
{
    /**
     * @param array{
     *     ready?: 'DISABLED'|'ENABLED'|null,
     *     readyTimeoutInSeconds?: int<1, 3600>|null,
     *     validate?: 'DISABLED'|'ENABLED'|null,
     *     validateTimeoutInSeconds?: int<1, 3600>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovmImageVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $port
 * @property MicrovmHooks|null $microvmHooks
 * @property MicrovmImageHooks|null $microvmImageHooks
 */
class Hooks extends Shape
{
    /**
     * @param array{
     *     port?: int<1, 65535>|null,
     *     microvmHooks?: MicrovmHooks|null,
     *     microvmImageHooks?: MicrovmImageHooks|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

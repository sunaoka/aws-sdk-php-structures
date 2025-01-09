<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListSamples\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'CPU'|'MEMORY'|'THREADS'|'RX_RATE'|'TX_RATE'|'RX'|'TX'|'NATIVE_FRAMES'|'NATIVE_FPS'|'NATIVE_MIN_DRAWTIME'|'NATIVE_AVG_DRAWTIME'|'NATIVE_MAX_DRAWTIME'|'OPENGL_FRAMES'|'OPENGL_FPS'|'OPENGL_MIN_DRAWTIME'|'OPENGL_AVG_DRAWTIME'|'OPENGL_MAX_DRAWTIME' $type
 * @property string $url
 */
class Sample extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     type?: 'CPU'|'MEMORY'|'THREADS'|'RX_RATE'|'TX_RATE'|'RX'|'TX'|'NATIVE_FRAMES'|'NATIVE_FPS'|'NATIVE_MIN_DRAWTIME'|'NATIVE_AVG_DRAWTIME'|'NATIVE_MAX_DRAWTIME'|'OPENGL_FRAMES'|'OPENGL_FPS'|'OPENGL_MIN_DRAWTIME'|'OPENGL_AVG_DRAWTIME'|'OPENGL_MAX_DRAWTIME',
     *     url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

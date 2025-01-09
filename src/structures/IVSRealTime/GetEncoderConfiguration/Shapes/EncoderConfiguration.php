<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetEncoderConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property Video $video
 * @property array<string, string> $tags
 */
class EncoderConfiguration extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
     *     video?: Video,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

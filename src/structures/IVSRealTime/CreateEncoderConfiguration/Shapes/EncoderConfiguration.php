<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateEncoderConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $name
 * @property Video|null $video
 * @property array<string, string>|null $tags
 */
class EncoderConfiguration extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     video?: Video|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

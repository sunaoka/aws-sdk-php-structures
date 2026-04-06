<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'mkv'|'mov'|'mp4'|'webm'|'flv'|'mpeg'|'mpg'|'wmv'|'three_gp' $format
 * @property VideoSource $source
 */
class VideoBlock extends Shape
{
    /**
     * @param array{
     *     format: 'mkv'|'mov'|'mp4'|'webm'|'flv'|'mpeg'|'mpg'|'wmv'|'three_gp',
     *     source: VideoSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

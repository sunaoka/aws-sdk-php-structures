<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 4> $CaptionChannel
 * @property string $LanguageCode
 * @property string $LanguageDescription
 */
class CaptionLanguageMapping extends Shape
{
    /**
     * @param array{
     *     CaptionChannel: int<1, 4>,
     *     LanguageCode: string,
     *     LanguageDescription: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

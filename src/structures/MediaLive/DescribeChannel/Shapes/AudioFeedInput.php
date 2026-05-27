<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AudioSelectorName
 * @property string|null $FeedInput
 */
class AudioFeedInput extends Shape
{
    /**
     * @param array{
     *     AudioSelectorName?: string|null,
     *     FeedInput?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

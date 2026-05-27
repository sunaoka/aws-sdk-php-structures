<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FeedArn
 * @property list<AudioFeedInput>|null $AudioFeedInputs
 */
class DescribeInferenceSettings extends Shape
{
    /**
     * @param array{
     *     FeedArn?: string|null,
     *     AudioFeedInputs?: list<AudioFeedInput>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

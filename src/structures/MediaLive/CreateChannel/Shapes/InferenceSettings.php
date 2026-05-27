<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FeedArn
 * @property list<AudioFeedInput>|null $AudioFeedInputs
 */
class InferenceSettings extends Shape
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

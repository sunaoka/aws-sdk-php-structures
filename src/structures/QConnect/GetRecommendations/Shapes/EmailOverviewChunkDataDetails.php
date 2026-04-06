<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $completion
 * @property string|null $nextChunkToken
 */
class EmailOverviewChunkDataDetails extends Shape
{
    /**
     * @param array{
     *     completion?: string|null,
     *     nextChunkToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

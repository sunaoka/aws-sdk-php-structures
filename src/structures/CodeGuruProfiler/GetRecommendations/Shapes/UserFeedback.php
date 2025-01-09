<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Positive'|'Negative' $type
 */
class UserFeedback extends Shape
{
    /**
     * @param array{type: 'Positive'|'Negative'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nextMessageToken
 */
class ProactiveRecommendationDataDetails extends Shape
{
    /**
     * @param array{nextMessageToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

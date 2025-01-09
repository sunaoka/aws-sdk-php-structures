<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MatchingBucket $matchingBucket
 */
class MatchingResource extends Shape
{
    /**
     * @param array{matchingBucket?: MatchingBucket} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

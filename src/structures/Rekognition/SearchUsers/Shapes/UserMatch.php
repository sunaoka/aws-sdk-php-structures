<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Similarity
 * @property MatchedUser $User
 */
class UserMatch extends Shape
{
    /**
     * @param array{
     *     Similarity?: float,
     *     User?: MatchedUser
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

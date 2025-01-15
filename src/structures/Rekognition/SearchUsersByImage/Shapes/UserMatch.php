<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsersByImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Similarity
 * @property MatchedUser|null $User
 */
class UserMatch extends Shape
{
    /**
     * @param array{
     *     Similarity?: float|null,
     *     User?: MatchedUser|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserId
 */
class SearchedUser extends Shape
{
    /**
     * @param array{UserId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

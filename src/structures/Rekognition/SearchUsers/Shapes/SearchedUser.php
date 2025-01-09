<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 */
class SearchedUser extends Shape
{
    /**
     * @param array{UserId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

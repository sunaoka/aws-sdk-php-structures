<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TagValue|null $equalTo
 */
class TagFilter extends Shape
{
    /**
     * @param array{equalTo?: TagValue|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timems
 * @property string $rid
 */
class SearchStatus extends Shape
{
    /**
     * @param array{
     *     timems?: int,
     *     rid?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

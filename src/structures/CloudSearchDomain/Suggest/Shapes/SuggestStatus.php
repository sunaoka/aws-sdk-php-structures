<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timems
 * @property string $rid
 */
class SuggestStatus extends Shape
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

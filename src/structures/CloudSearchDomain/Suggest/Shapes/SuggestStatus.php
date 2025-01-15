<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $timems
 * @property string|null $rid
 */
class SuggestStatus extends Shape
{
    /**
     * @param array{
     *     timems?: int|null,
     *     rid?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

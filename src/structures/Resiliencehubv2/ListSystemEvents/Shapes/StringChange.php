<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $oldValue
 * @property string|null $newValue
 */
class StringChange extends Shape
{
    /**
     * @param array{
     *     oldValue?: string|null,
     *     newValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

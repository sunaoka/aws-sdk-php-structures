<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourceShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $tagKey
 * @property list<string>|null $tagValues
 */
class TagFilter extends Shape
{
    /**
     * @param array{
     *     tagKey?: string|null,
     *     tagValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

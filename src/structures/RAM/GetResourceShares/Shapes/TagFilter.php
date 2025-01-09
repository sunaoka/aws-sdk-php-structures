<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourceShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tagKey
 * @property list<string> $tagValues
 */
class TagFilter extends Shape
{
    /**
     * @param array{
     *     tagKey?: string,
     *     tagValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

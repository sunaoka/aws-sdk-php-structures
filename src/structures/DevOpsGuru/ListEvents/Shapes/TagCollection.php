<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppBoundaryKey
 * @property list<string> $TagValues
 */
class TagCollection extends Shape
{
    /**
     * @param array{
     *     AppBoundaryKey: string,
     *     TagValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

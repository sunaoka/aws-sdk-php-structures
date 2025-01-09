<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetResourceCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppBoundaryKey
 * @property list<string> $TagValues
 */
class TagCollectionFilter extends Shape
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

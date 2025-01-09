<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Paths
 * @property string $ConnectionName
 * @property list<string> $Exclusions
 * @property int $MaximumTraversalDepth
 */
class IcebergTarget extends Shape
{
    /**
     * @param array{
     *     Paths?: list<string>,
     *     ConnectionName?: string,
     *     Exclusions?: list<string>,
     *     MaximumTraversalDepth?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

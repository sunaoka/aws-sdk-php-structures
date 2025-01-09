<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $createdCount
 * @property int $modifiedCount
 */
class ImportTaskSummaryServers extends Shape
{
    /**
     * @param array{
     *     createdCount?: int,
     *     modifiedCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

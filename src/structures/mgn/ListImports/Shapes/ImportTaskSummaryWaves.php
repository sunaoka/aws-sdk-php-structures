<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $createdCount
 * @property int<0, max> $modifiedCount
 */
class ImportTaskSummaryWaves extends Shape
{
    /**
     * @param array{
     *     createdCount?: int<0, max>,
     *     modifiedCount?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

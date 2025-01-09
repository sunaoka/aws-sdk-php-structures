<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $totalReadCount
 * @property int $totalBaseCount
 * @property string $generatedFrom
 * @property string $alignment
 */
class SequenceInformation extends Shape
{
    /**
     * @param array{
     *     totalReadCount?: int,
     *     totalBaseCount?: int,
     *     generatedFrom?: string,
     *     alignment?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

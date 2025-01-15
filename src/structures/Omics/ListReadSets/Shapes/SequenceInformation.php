<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalReadCount
 * @property int|null $totalBaseCount
 * @property string|null $generatedFrom
 * @property string|null $alignment
 */
class SequenceInformation extends Shape
{
    /**
     * @param array{
     *     totalReadCount?: int|null,
     *     totalBaseCount?: int|null,
     *     generatedFrom?: string|null,
     *     alignment?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

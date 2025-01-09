<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileInformation $source1
 * @property FileInformation $source2
 * @property FileInformation $index
 */
class ReadSetFiles extends Shape
{
    /**
     * @param array{
     *     source1?: FileInformation,
     *     source2?: FileInformation,
     *     index?: FileInformation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

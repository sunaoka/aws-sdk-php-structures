<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileInformation|null $source1
 * @property FileInformation|null $source2
 * @property FileInformation|null $index
 */
class ReadSetFiles extends Shape
{
    /**
     * @param array{
     *     source1?: FileInformation|null,
     *     source2?: FileInformation|null,
     *     index?: FileInformation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000>|null $totalParts
 * @property int<1, 5368709120>|null $partSize
 * @property int<1, 5497558138880>|null $contentLength
 */
class FileInformation extends Shape
{
    /**
     * @param array{
     *     totalParts?: int<1, 10000>|null,
     *     partSize?: int<1, 5368709120>|null,
     *     contentLength?: int<1, 5497558138880>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

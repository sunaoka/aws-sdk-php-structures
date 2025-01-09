<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000> $totalParts
 * @property int<1, 5368709120> $partSize
 * @property int<1, 5497558138880> $contentLength
 * @property ReadSetS3Access $s3Access
 */
class FileInformation extends Shape
{
    /**
     * @param array{
     *     totalParts?: int<1, 10000>,
     *     partSize?: int<1, 5368709120>,
     *     contentLength?: int<1, 5497558138880>,
     *     s3Access?: ReadSetS3Access
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

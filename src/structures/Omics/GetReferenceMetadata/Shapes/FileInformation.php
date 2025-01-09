<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $totalParts
 * @property int $partSize
 * @property int $contentLength
 * @property ReadSetS3Access $s3Access
 */
class FileInformation extends Shape
{
    /**
     * @param array{
     *     totalParts?: int,
     *     partSize?: int,
     *     contentLength?: int,
     *     s3Access?: ReadSetS3Access
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

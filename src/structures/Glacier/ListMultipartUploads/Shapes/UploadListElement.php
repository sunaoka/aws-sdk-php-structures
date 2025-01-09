<?php

namespace Sunaoka\Aws\Structures\Glacier\ListMultipartUploads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MultipartUploadId
 * @property string $VaultARN
 * @property string $ArchiveDescription
 * @property int $PartSizeInBytes
 * @property string $CreationDate
 */
class UploadListElement extends Shape
{
    /**
     * @param array{
     *     MultipartUploadId?: string,
     *     VaultARN?: string,
     *     ArchiveDescription?: string,
     *     PartSizeInBytes?: int,
     *     CreationDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

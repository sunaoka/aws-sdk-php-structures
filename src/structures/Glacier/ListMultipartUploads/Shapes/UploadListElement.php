<?php

namespace Sunaoka\Aws\Structures\Glacier\ListMultipartUploads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MultipartUploadId
 * @property string|null $VaultARN
 * @property string|null $ArchiveDescription
 * @property int|null $PartSizeInBytes
 * @property string|null $CreationDate
 */
class UploadListElement extends Shape
{
    /**
     * @param array{
     *     MultipartUploadId?: string|null,
     *     VaultARN?: string|null,
     *     ArchiveDescription?: string|null,
     *     PartSizeInBytes?: int|null,
     *     CreationDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

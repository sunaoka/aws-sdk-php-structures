<?php

namespace Sunaoka\Aws\Structures\S3\ListMultipartUploads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UploadId
 * @property string|null $Key
 * @property \Aws\Api\DateTimeResult|null $Initiated
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null $StorageClass
 * @property Owner|null $Owner
 * @property Initiator|null $Initiator
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 * @property 'COMPOSITE'|'FULL_OBJECT'|null $ChecksumType
 */
class MultipartUpload extends Shape
{
    /**
     * @param array{
     *     UploadId?: string|null,
     *     Key?: string|null,
     *     Initiated?: \Aws\Api\DateTimeResult|null,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null,
     *     Owner?: Owner|null,
     *     Initiator?: Initiator|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null,
     *     ChecksumType?: 'COMPOSITE'|'FULL_OBJECT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

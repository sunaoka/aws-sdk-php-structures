<?php

namespace Sunaoka\Aws\Structures\S3\ListMultipartUploads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UploadId
 * @property string $Key
 * @property \Aws\Api\DateTimeResult $Initiated
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE' $StorageClass
 * @property Owner $Owner
 * @property Initiator $Initiator
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 */
class MultipartUpload extends Shape
{
    /**
     * @param array{
     *     UploadId?: string,
     *     Key?: string,
     *     Initiated?: \Aws\Api\DateTimeResult,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE',
     *     Owner?: Owner,
     *     Initiator?: Initiator,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAnnotation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface $AnnotationPayload
 * @property string|null $ObjectVersionId
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property int|null $ContentLength
 * @property string|null $ETag
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumCRC64NVME
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property string|null $ChecksumSHA512
 * @property string|null $ChecksumMD5
 * @property string|null $ChecksumXXHASH64
 * @property string|null $ChecksumXXHASH3
 * @property string|null $ChecksumXXHASH128
 * @property 'COMPOSITE'|'FULL_OBJECT'|null $ChecksumType
 * @property 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property 'requester'|null $RequestCharged
 * @property 'COMPLETE'|'PENDING'|'FAILED'|'REPLICA'|'COMPLETED'|null $ReplicationStatus
 */
class GetObjectAnnotationResponse extends Response
{
}

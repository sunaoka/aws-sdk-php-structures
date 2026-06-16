<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectAnnotation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Key
 * @property string|null $AnnotationName
 * @property string|null $ObjectVersionId
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
 */
class PutObjectAnnotationResponse extends Response
{
}

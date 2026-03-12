<?php

namespace Sunaoka\Aws\Structures\SimpleDBv2\StartDomainExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainName
 * @property string $s3Bucket
 * @property string|null $s3KeyPrefix
 * @property 'AES256'|'KMS'|null $s3SseAlgorithm
 * @property string|null $s3SseKmsKeyId
 * @property string|null $s3BucketOwner
 */
class StartDomainExportRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainName: string,
     *     s3Bucket: string,
     *     s3KeyPrefix?: string|null,
     *     s3SseAlgorithm?: 'AES256'|'KMS'|null,
     *     s3SseKmsKeyId?: string|null,
     *     s3BucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property Shapes\NotificationConfigurationDeprecated $NotificationConfiguration
 * @property string $ExpectedBucketOwner
 */
class PutBucketNotificationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContentMD5?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     NotificationConfiguration: Shapes\NotificationConfigurationDeprecated,
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

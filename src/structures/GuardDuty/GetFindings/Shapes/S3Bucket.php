<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $EncryptionType
 * @property string $EncryptionKeyArn
 * @property string $EffectivePermission
 * @property 'BLOCKED'|'ALLOWED' $PublicReadAccess
 * @property 'BLOCKED'|'ALLOWED' $PublicWriteAccess
 * @property PublicAccessConfiguration $AccountPublicAccess
 * @property PublicAccessConfiguration $BucketPublicAccess
 * @property list<string> $S3ObjectUids
 */
class S3Bucket extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     EncryptionType?: string,
     *     EncryptionKeyArn?: string,
     *     EffectivePermission?: string,
     *     PublicReadAccess?: 'BLOCKED'|'ALLOWED',
     *     PublicWriteAccess?: 'BLOCKED'|'ALLOWED',
     *     AccountPublicAccess?: PublicAccessConfiguration,
     *     BucketPublicAccess?: PublicAccessConfiguration,
     *     S3ObjectUids?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

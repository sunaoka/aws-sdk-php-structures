<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $EncryptionType
 * @property string|null $EncryptionKeyArn
 * @property string|null $EffectivePermission
 * @property 'BLOCKED'|'ALLOWED'|null $PublicReadAccess
 * @property 'BLOCKED'|'ALLOWED'|null $PublicWriteAccess
 * @property PublicAccessConfiguration|null $AccountPublicAccess
 * @property PublicAccessConfiguration|null $BucketPublicAccess
 * @property list<string>|null $S3ObjectUids
 */
class S3Bucket extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     EncryptionType?: string|null,
     *     EncryptionKeyArn?: string|null,
     *     EffectivePermission?: string|null,
     *     PublicReadAccess?: 'BLOCKED'|'ALLOWED'|null,
     *     PublicWriteAccess?: 'BLOCKED'|'ALLOWED'|null,
     *     AccountPublicAccess?: PublicAccessConfiguration|null,
     *     BucketPublicAccess?: PublicAccessConfiguration|null,
     *     S3ObjectUids?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ACMPCA\UpdateCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int<1, 5000>|null $ExpirationInDays
 * @property string|null $CustomCname
 * @property string|null $S3BucketName
 * @property 'PUBLIC_READ'|'BUCKET_OWNER_FULL_CONTROL'|null $S3ObjectAcl
 */
class CrlConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     ExpirationInDays?: int<1, 5000>|null,
     *     CustomCname?: string|null,
     *     S3BucketName?: string|null,
     *     S3ObjectAcl?: 'PUBLIC_READ'|'BUCKET_OWNER_FULL_CONTROL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

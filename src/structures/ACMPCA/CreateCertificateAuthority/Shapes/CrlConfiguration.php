<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $ExpirationInDays
 * @property string $CustomCname
 * @property string $S3BucketName
 * @property 'PUBLIC_READ'|'BUCKET_OWNER_FULL_CONTROL' $S3ObjectAcl
 * @property CrlDistributionPointExtensionConfiguration $CrlDistributionPointExtensionConfiguration
 */
class CrlConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     ExpirationInDays?: int,
     *     CustomCname?: string,
     *     S3BucketName?: string,
     *     S3ObjectAcl?: 'PUBLIC_READ'|'BUCKET_OWNER_FULL_CONTROL',
     *     CrlDistributionPointExtensionConfiguration?: CrlDistributionPointExtensionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

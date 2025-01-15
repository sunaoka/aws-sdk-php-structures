<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAssociatedEnclaveCertificateIamRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociatedRoleArn
 * @property string|null $CertificateS3BucketName
 * @property string|null $CertificateS3ObjectKey
 * @property string|null $EncryptionKmsKeyId
 */
class AssociatedRole extends Shape
{
    /**
     * @param array{
     *     AssociatedRoleArn?: string|null,
     *     CertificateS3BucketName?: string|null,
     *     CertificateS3ObjectKey?: string|null,
     *     EncryptionKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

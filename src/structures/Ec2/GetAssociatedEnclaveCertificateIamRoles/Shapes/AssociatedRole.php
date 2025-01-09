<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAssociatedEnclaveCertificateIamRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociatedRoleArn
 * @property string $CertificateS3BucketName
 * @property string $CertificateS3ObjectKey
 * @property string $EncryptionKmsKeyId
 */
class AssociatedRole extends Shape
{
    /**
     * @param array{
     *     AssociatedRoleArn?: string,
     *     CertificateS3BucketName?: string,
     *     CertificateS3ObjectKey?: string,
     *     EncryptionKmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

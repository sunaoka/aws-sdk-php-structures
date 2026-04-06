<?php

namespace Sunaoka\Aws\Structures\Iam\UploadSigningCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $CertificateId
 * @property string $CertificateBody
 * @property 'Active'|'Inactive'|'Expired' $Status
 * @property \Aws\Api\DateTimeResult|null $UploadDate
 */
class SigningCertificate extends Shape
{
    /**
     * @param array{
     *     UserName: string,
     *     CertificateId: string,
     *     CertificateBody: string,
     *     Status: 'Active'|'Inactive'|'Expired',
     *     UploadDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

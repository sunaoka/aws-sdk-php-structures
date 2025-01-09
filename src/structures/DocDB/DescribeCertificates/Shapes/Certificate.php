<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateIdentifier
 * @property string $CertificateType
 * @property string $Thumbprint
 * @property \Aws\Api\DateTimeResult $ValidFrom
 * @property \Aws\Api\DateTimeResult $ValidTill
 * @property string $CertificateArn
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     CertificateIdentifier?: string,
     *     CertificateType?: string,
     *     Thumbprint?: string,
     *     ValidFrom?: \Aws\Api\DateTimeResult,
     *     ValidTill?: \Aws\Api\DateTimeResult,
     *     CertificateArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

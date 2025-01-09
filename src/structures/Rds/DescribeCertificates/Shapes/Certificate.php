<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateIdentifier
 * @property string $CertificateType
 * @property string $Thumbprint
 * @property \Aws\Api\DateTimeResult $ValidFrom
 * @property \Aws\Api\DateTimeResult $ValidTill
 * @property string $CertificateArn
 * @property bool $CustomerOverride
 * @property \Aws\Api\DateTimeResult $CustomerOverrideValidTill
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
     *     CertificateArn?: string,
     *     CustomerOverride?: bool,
     *     CustomerOverrideValidTill?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

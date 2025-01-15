<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateIdentifier
 * @property string|null $CertificateType
 * @property string|null $Thumbprint
 * @property \Aws\Api\DateTimeResult|null $ValidFrom
 * @property \Aws\Api\DateTimeResult|null $ValidTill
 * @property string|null $CertificateArn
 * @property bool|null $CustomerOverride
 * @property \Aws\Api\DateTimeResult|null $CustomerOverrideValidTill
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     CertificateIdentifier?: string|null,
     *     CertificateType?: string|null,
     *     Thumbprint?: string|null,
     *     ValidFrom?: \Aws\Api\DateTimeResult|null,
     *     ValidTill?: \Aws\Api\DateTimeResult|null,
     *     CertificateArn?: string|null,
     *     CustomerOverride?: bool|null,
     *     CustomerOverrideValidTill?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $notBefore
 * @property \Aws\Api\DateTimeResult $notAfter
 */
class CertificateValidity extends Shape
{
    /**
     * @param array{
     *     notBefore?: \Aws\Api\DateTimeResult,
     *     notAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCACertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $notBefore
 * @property \Aws\Api\DateTimeResult|null $notAfter
 */
class CertificateValidity extends Shape
{
    /**
     * @param array{
     *     notBefore?: \Aws\Api\DateTimeResult|null,
     *     notAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

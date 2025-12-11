<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateTrustStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaCertificatesBundleS3Location|null $CaCertificatesBundleS3Location
 */
class CaCertificatesBundleSource extends Shape
{
    /**
     * @param array{CaCertificatesBundleS3Location?: CaCertificatesBundleS3Location|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

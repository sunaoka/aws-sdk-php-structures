<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientCertificateArn
 */
class OriginMtlsConfig extends Shape
{
    /**
     * @param array{ClientCertificateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

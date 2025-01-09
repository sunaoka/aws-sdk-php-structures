<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientCertificateCallbackArn
 */
class ClientCertificateConfig extends Shape
{
    /**
     * @param array{clientCertificateCallbackArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

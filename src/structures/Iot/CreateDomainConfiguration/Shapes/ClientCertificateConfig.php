<?php

namespace Sunaoka\Aws\Structures\Iot\CreateDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientCertificateCallbackArn
 */
class ClientCertificateConfig extends Shape
{
    /**
     * @param array{clientCertificateCallbackArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\AddListenerCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property bool $IsDefault
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string,
     *     IsDefault?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

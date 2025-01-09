<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\AddListenerCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property list<Shapes\Certificate> $Certificates
 */
class AddListenerCertificatesRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     Certificates: list<Shapes\Certificate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

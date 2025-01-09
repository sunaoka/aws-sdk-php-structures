<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeListenerCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property string $Marker
 * @property int $PageSize
 */
class DescribeListenerCertificatesRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     Marker?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

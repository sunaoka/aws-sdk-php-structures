<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeListenerCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property string $Marker
 * @property int<1, 400> $PageSize
 */
class DescribeListenerCertificatesRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     Marker?: string,
     *     PageSize?: int<1, 400>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

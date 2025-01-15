<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeListenerCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property string|null $Marker
 * @property int<1, 400>|null $PageSize
 */
class DescribeListenerCertificatesRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     Marker?: string|null,
     *     PageSize?: int<1, 400>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

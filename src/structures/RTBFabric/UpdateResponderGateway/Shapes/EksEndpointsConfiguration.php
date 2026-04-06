<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateResponderGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpointsResourceName
 * @property string $endpointsResourceNamespace
 * @property string $clusterApiServerEndpointUri
 * @property string $clusterApiServerCaCertificateChain
 * @property string $clusterName
 * @property string $roleArn
 */
class EksEndpointsConfiguration extends Shape
{
    /**
     * @param array{
     *     endpointsResourceName: string,
     *     endpointsResourceNamespace: string,
     *     clusterApiServerEndpointUri: string,
     *     clusterApiServerCaCertificateChain: string,
     *     clusterName: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

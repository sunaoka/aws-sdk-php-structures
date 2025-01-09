<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 * @property string $clusterSecurityGroupId
 * @property string $vpcId
 * @property bool $endpointPublicAccess
 * @property bool $endpointPrivateAccess
 * @property list<string> $publicAccessCidrs
 */
class VpcConfigResponse extends Shape
{
    /**
     * @param array{
     *     subnetIds?: list<string>,
     *     securityGroupIds?: list<string>,
     *     clusterSecurityGroupId?: string,
     *     vpcId?: string,
     *     endpointPublicAccess?: bool,
     *     endpointPrivateAccess?: bool,
     *     publicAccessCidrs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

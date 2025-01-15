<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property string|null $clusterSecurityGroupId
 * @property string|null $vpcId
 * @property bool|null $endpointPublicAccess
 * @property bool|null $endpointPrivateAccess
 * @property list<string>|null $publicAccessCidrs
 */
class VpcConfigResponse extends Shape
{
    /**
     * @param array{
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     clusterSecurityGroupId?: string|null,
     *     vpcId?: string|null,
     *     endpointPublicAccess?: bool|null,
     *     endpointPrivateAccess?: bool|null,
     *     publicAccessCidrs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property bool|null $endpointPublicAccess
 * @property bool|null $endpointPrivateAccess
 * @property list<string>|null $publicAccessCidrs
 */
class VpcConfigRequest extends Shape
{
    /**
     * @param array{
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
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

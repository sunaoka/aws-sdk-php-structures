<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 * @property bool $endpointPublicAccess
 * @property bool $endpointPrivateAccess
 * @property list<string> $publicAccessCidrs
 */
class VpcConfigRequest extends Shape
{
    /**
     * @param array{
     *     subnetIds?: list<string>,
     *     securityGroupIds?: list<string>,
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

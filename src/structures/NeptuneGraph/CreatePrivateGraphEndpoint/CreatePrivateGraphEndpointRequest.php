<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreatePrivateGraphEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property list<string> $vpcSecurityGroupIds
 */
class CreatePrivateGraphEndpointRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     vpcId?: string,
     *     subnetIds?: list<string>,
     *     vpcSecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

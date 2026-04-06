<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreatePrivateGraphEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string|null $vpcId
 * @property list<string>|null $subnetIds
 * @property list<string>|null $vpcSecurityGroupIds
 */
class CreatePrivateGraphEndpointRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     vpcId?: string|null,
     *     subnetIds?: list<string>|null,
     *     vpcSecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

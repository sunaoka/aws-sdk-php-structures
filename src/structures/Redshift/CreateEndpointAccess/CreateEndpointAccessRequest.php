<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $ResourceOwner
 * @property string $EndpointName
 * @property string $SubnetGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 */
class CreateEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     ResourceOwner?: string|null,
     *     EndpointName: string,
     *     SubnetGroupName: string,
     *     VpcSecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

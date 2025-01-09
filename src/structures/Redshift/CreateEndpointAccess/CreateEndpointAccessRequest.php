<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $ResourceOwner
 * @property string $EndpointName
 * @property string $SubnetGroupName
 * @property list<string> $VpcSecurityGroupIds
 */
class CreateEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     ResourceOwner?: string,
     *     EndpointName: string,
     *     SubnetGroupName: string,
     *     VpcSecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

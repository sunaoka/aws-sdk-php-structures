<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBClusterEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $DBClusterEndpointIdentifier
 * @property string $EndpointType
 * @property list<string> $StaticMembers
 * @property list<string> $ExcludedMembers
 * @property list<Shapes\Tag> $Tags
 */
class CreateDBClusterEndpointRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     DBClusterEndpointIdentifier: string,
     *     EndpointType: string,
     *     StaticMembers?: list<string>,
     *     ExcludedMembers?: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBClusterEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $DBClusterEndpointIdentifier
 * @property string $EndpointType
 * @property list<string>|null $StaticMembers
 * @property list<string>|null $ExcludedMembers
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDBClusterEndpointRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     DBClusterEndpointIdentifier: string,
     *     EndpointType: string,
     *     StaticMembers?: list<string>|null,
     *     ExcludedMembers?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

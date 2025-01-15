<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBClusterEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterEndpointIdentifier
 * @property string|null $EndpointType
 * @property list<string>|null $StaticMembers
 * @property list<string>|null $ExcludedMembers
 */
class ModifyDBClusterEndpointRequest extends Request
{
    /**
     * @param array{
     *     DBClusterEndpointIdentifier: string,
     *     EndpointType?: string|null,
     *     StaticMembers?: list<string>|null,
     *     ExcludedMembers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

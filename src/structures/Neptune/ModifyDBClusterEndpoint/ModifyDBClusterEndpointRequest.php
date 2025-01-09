<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBClusterEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterEndpointIdentifier
 * @property string $EndpointType
 * @property list<string> $StaticMembers
 * @property list<string> $ExcludedMembers
 */
class ModifyDBClusterEndpointRequest extends Request
{
    /**
     * @param array{
     *     DBClusterEndpointIdentifier: string,
     *     EndpointType?: string,
     *     StaticMembers?: list<string>,
     *     ExcludedMembers?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

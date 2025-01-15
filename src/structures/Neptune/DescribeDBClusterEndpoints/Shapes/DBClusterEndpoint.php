<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBClusterEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBClusterEndpointIdentifier
 * @property string|null $DBClusterIdentifier
 * @property string|null $DBClusterEndpointResourceIdentifier
 * @property string|null $Endpoint
 * @property string|null $Status
 * @property string|null $EndpointType
 * @property string|null $CustomEndpointType
 * @property list<string>|null $StaticMembers
 * @property list<string>|null $ExcludedMembers
 * @property string|null $DBClusterEndpointArn
 */
class DBClusterEndpoint extends Shape
{
    /**
     * @param array{
     *     DBClusterEndpointIdentifier?: string|null,
     *     DBClusterIdentifier?: string|null,
     *     DBClusterEndpointResourceIdentifier?: string|null,
     *     Endpoint?: string|null,
     *     Status?: string|null,
     *     EndpointType?: string|null,
     *     CustomEndpointType?: string|null,
     *     StaticMembers?: list<string>|null,
     *     ExcludedMembers?: list<string>|null,
     *     DBClusterEndpointArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

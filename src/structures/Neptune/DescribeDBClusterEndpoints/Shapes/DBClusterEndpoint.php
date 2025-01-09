<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBClusterEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBClusterEndpointIdentifier
 * @property string $DBClusterIdentifier
 * @property string $DBClusterEndpointResourceIdentifier
 * @property string $Endpoint
 * @property string $Status
 * @property string $EndpointType
 * @property string $CustomEndpointType
 * @property list<string> $StaticMembers
 * @property list<string> $ExcludedMembers
 * @property string $DBClusterEndpointArn
 */
class DBClusterEndpoint extends Shape
{
    /**
     * @param array{
     *     DBClusterEndpointIdentifier?: string,
     *     DBClusterIdentifier?: string,
     *     DBClusterEndpointResourceIdentifier?: string,
     *     Endpoint?: string,
     *     Status?: string,
     *     EndpointType?: string,
     *     CustomEndpointType?: string,
     *     StaticMembers?: list<string>,
     *     ExcludedMembers?: list<string>,
     *     DBClusterEndpointArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

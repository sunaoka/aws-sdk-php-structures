<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcEndpointId
 * @property string $VpcEndpointOwner
 * @property string $DomainArn
 * @property VPCDerivedInfo $VpcOptions
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED' $Status
 * @property string $Endpoint
 */
class VpcEndpoint extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string,
     *     VpcEndpointOwner?: string,
     *     DomainArn?: string,
     *     VpcOptions?: VPCDerivedInfo,
     *     Status?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED',
     *     Endpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

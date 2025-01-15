<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcEndpointId
 * @property string|null $VpcEndpointOwner
 * @property string|null $DomainArn
 * @property VPCDerivedInfo|null $VpcOptions
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|null $Status
 * @property string|null $Endpoint
 */
class VpcEndpoint extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string|null,
     *     VpcEndpointOwner?: string|null,
     *     DomainArn?: string|null,
     *     VpcOptions?: VPCDerivedInfo|null,
     *     Status?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|null,
     *     Endpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListVpcEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcEndpointId
 * @property string|null $VpcEndpointOwner
 * @property string|null $DomainArn
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|null $Status
 */
class VpcEndpointSummary extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string|null,
     *     VpcEndpointOwner?: string|null,
     *     DomainArn?: string|null,
     *     Status?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

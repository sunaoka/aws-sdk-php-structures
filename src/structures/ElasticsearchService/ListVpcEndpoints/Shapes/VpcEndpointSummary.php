<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListVpcEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcEndpointId
 * @property string $VpcEndpointOwner
 * @property string $DomainArn
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED' $Status
 */
class VpcEndpointSummary extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string,
     *     VpcEndpointOwner?: string,
     *     DomainArn?: string,
     *     Status?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

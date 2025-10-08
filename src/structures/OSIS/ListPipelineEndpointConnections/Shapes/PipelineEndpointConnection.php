<?php

namespace Sunaoka\Aws\Structures\OSIS\ListPipelineEndpointConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PipelineArn
 * @property string|null $EndpointId
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'DELETING'|'REVOKING'|'REVOKED'|null $Status
 * @property string|null $VpcEndpointOwner
 */
class PipelineEndpointConnection extends Shape
{
    /**
     * @param array{
     *     PipelineArn?: string|null,
     *     EndpointId?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'DELETING'|'REVOKING'|'REVOKED'|null,
     *     VpcEndpointOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

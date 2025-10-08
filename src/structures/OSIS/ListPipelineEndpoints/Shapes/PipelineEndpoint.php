<?php

namespace Sunaoka\Aws\Structures\OSIS\ListPipelineEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PipelineArn
 * @property string|null $EndpointId
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'DELETING'|'REVOKING'|'REVOKED'|null $Status
 * @property string|null $VpcId
 * @property PipelineEndpointVpcOptions|null $VpcOptions
 * @property string|null $IngestEndpointUrl
 */
class PipelineEndpoint extends Shape
{
    /**
     * @param array{
     *     PipelineArn?: string|null,
     *     EndpointId?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'DELETING'|'REVOKING'|'REVOKED'|null,
     *     VpcId?: string|null,
     *     VpcOptions?: PipelineEndpointVpcOptions|null,
     *     IngestEndpointUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

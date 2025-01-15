<?php

namespace Sunaoka\Aws\Structures\OSIS\StartPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPENSEARCH_SERVERLESS'|null $ServiceName
 * @property string|null $VpcEndpointId
 */
class ServiceVpcEndpoint extends Shape
{
    /**
     * @param array{
     *     ServiceName?: 'OPENSEARCH_SERVERLESS'|null,
     *     VpcEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

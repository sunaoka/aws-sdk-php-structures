<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPENSEARCH_SERVERLESS' $ServiceName
 * @property string $VpcEndpointId
 */
class ServiceVpcEndpoint extends Shape
{
    /**
     * @param array{
     *     ServiceName?: 'OPENSEARCH_SERVERLESS',
     *     VpcEndpointId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

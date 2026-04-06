<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListProductRestEndpointPages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Endpoint
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string|null $OperationName
 * @property string $ProductRestEndpointPageArn
 * @property string $ProductRestEndpointPageId
 * @property RestEndpointIdentifier $RestEndpointIdentifier
 * @property 'AVAILABLE'|'IN_PROGRESS'|'FAILED' $Status
 * @property StatusException|null $StatusException
 * @property 'ENABLED'|'DISABLED' $TryItState
 */
class ProductRestEndpointPageSummaryNoBody extends Shape
{
    /**
     * @param array{
     *     Endpoint: string,
     *     LastModified: \Aws\Api\DateTimeResult,
     *     OperationName?: string|null,
     *     ProductRestEndpointPageArn: string,
     *     ProductRestEndpointPageId: string,
     *     RestEndpointIdentifier: RestEndpointIdentifier,
     *     Status: 'AVAILABLE'|'IN_PROGRESS'|'FAILED',
     *     StatusException?: StatusException|null,
     *     TryItState: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

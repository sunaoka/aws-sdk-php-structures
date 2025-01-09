<?php

namespace Sunaoka\Aws\Structures\Bedrock\RegisterMarketplaceModelEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpointArn
 * @property string $modelSourceIdentifier
 * @property 'REGISTERED'|'INCOMPATIBLE_ENDPOINT' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property EndpointConfig $endpointConfig
 * @property string $endpointStatus
 * @property string $endpointStatusMessage
 */
class MarketplaceModelEndpoint extends Shape
{
    /**
     * @param array{
     *     endpointArn: string,
     *     modelSourceIdentifier: string,
     *     status?: 'REGISTERED'|'INCOMPATIBLE_ENDPOINT',
     *     statusMessage?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     endpointConfig: EndpointConfig,
     *     endpointStatus: string,
     *     endpointStatusMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

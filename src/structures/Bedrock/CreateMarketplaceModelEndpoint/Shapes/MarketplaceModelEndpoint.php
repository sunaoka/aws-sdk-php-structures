<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateMarketplaceModelEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpointArn
 * @property string $modelSourceIdentifier
 * @property 'REGISTERED'|'INCOMPATIBLE_ENDPOINT'|null $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property EndpointConfig $endpointConfig
 * @property string $endpointStatus
 * @property string|null $endpointStatusMessage
 */
class MarketplaceModelEndpoint extends Shape
{
    /**
     * @param array{
     *     endpointArn: string,
     *     modelSourceIdentifier: string,
     *     status?: 'REGISTERED'|'INCOMPATIBLE_ENDPOINT'|null,
     *     statusMessage?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     endpointConfig: EndpointConfig,
     *     endpointStatus: string,
     *     endpointStatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

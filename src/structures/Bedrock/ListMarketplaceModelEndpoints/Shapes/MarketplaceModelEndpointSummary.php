<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListMarketplaceModelEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpointArn
 * @property string $modelSourceIdentifier
 * @property 'REGISTERED'|'INCOMPATIBLE_ENDPOINT' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class MarketplaceModelEndpointSummary extends Shape
{
    /**
     * @param array{
     *     endpointArn: string,
     *     modelSourceIdentifier: string,
     *     status?: 'REGISTERED'|'INCOMPATIBLE_ENDPOINT',
     *     statusMessage?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

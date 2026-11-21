<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListInboundConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InboundConnectorId
 * @property string $Arn
 * @property string $Name
 * @property 'ENABLED'|'DISABLED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $TenantUrl
 * @property InboundConnectorConfig $InboundConnectorConfiguration
 * @property string|null $Description
 */
class InboundConnectorSummary extends Shape
{
    /**
     * @param array{
     *     InboundConnectorId: string,
     *     Arn: string,
     *     Name: string,
     *     Status: 'ENABLED'|'DISABLED',
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime: \Aws\Api\DateTimeResult,
     *     TenantUrl: string,
     *     InboundConnectorConfiguration: InboundConnectorConfig,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

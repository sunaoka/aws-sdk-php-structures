<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeInboundConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InboundConnectorId
 * @property string $Arn
 * @property string $Name
 * @property 'ENABLED'|'DISABLED' $Status
 * @property string $TenantUrl
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property InboundConnectorConfig $InboundConnectorConfiguration
 * @property string|null $Description
 */
class InboundConnector extends Shape
{
    /**
     * @param array{
     *     InboundConnectorId: string,
     *     Arn: string,
     *     Name: string,
     *     Status: 'ENABLED'|'DISABLED',
     *     TenantUrl: string,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime: \Aws\Api\DateTimeResult,
     *     InboundConnectorConfiguration: InboundConnectorConfig,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

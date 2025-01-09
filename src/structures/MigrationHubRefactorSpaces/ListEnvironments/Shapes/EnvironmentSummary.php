<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $Description
 * @property string $EnvironmentId
 * @property ErrorResponse $Error
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property 'TRANSIT_GATEWAY'|'NONE' $NetworkFabricType
 * @property string $OwnerAccountId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $State
 * @property array<string, string> $Tags
 * @property string $TransitGatewayId
 */
class EnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     EnvironmentId?: string,
     *     Error?: ErrorResponse,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     NetworkFabricType?: 'TRANSIT_GATEWAY'|'NONE',
     *     OwnerAccountId?: string,
     *     State?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED',
     *     Tags?: array<string, string>,
     *     TransitGatewayId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

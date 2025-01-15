<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $Description
 * @property string|null $EnvironmentId
 * @property ErrorResponse|null $Error
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property 'TRANSIT_GATEWAY'|'NONE'|null $NetworkFabricType
 * @property string|null $OwnerAccountId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $State
 * @property array<string, string>|null $Tags
 * @property string|null $TransitGatewayId
 */
class EnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     EnvironmentId?: string|null,
     *     Error?: ErrorResponse|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     NetworkFabricType?: 'TRANSIT_GATEWAY'|'NONE'|null,
     *     OwnerAccountId?: string|null,
     *     State?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null,
     *     Tags?: array<string, string>|null,
     *     TransitGatewayId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

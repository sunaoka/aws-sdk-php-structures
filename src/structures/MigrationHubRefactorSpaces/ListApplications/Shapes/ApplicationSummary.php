<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApiGatewayProxySummary|null $ApiGatewayProxy
 * @property string|null $ApplicationId
 * @property string|null $Arn
 * @property string|null $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $EnvironmentId
 * @property ErrorResponse|null $Error
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property string|null $OwnerAccountId
 * @property 'API_GATEWAY'|null $ProxyType
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null $State
 * @property array<string, string>|null $Tags
 * @property string|null $VpcId
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     ApiGatewayProxy?: ApiGatewayProxySummary|null,
     *     ApplicationId?: string|null,
     *     Arn?: string|null,
     *     CreatedByAccountId?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     EnvironmentId?: string|null,
     *     Error?: ErrorResponse|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     OwnerAccountId?: string|null,
     *     ProxyType?: 'API_GATEWAY'|null,
     *     State?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null,
     *     Tags?: array<string, string>|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

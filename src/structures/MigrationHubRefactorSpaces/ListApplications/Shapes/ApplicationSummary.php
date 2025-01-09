<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApiGatewayProxySummary $ApiGatewayProxy
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $EnvironmentId
 * @property ErrorResponse $Error
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property string $OwnerAccountId
 * @property 'API_GATEWAY' $ProxyType
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING' $State
 * @property array<string, string> $Tags
 * @property string $VpcId
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     ApiGatewayProxy?: ApiGatewayProxySummary,
     *     ApplicationId?: string,
     *     Arn?: string,
     *     CreatedByAccountId?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     EnvironmentId?: string,
     *     Error?: ErrorResponse,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     OwnerAccountId?: string,
     *     ProxyType?: 'API_GATEWAY',
     *     State?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING',
     *     Tags?: array<string, string>,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

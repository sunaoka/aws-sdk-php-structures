<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $Arn
 * @property string|null $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $Description
 * @property 'LAMBDA'|'URL'|null $EndpointType
 * @property string|null $EnvironmentId
 * @property ErrorResponse|null $Error
 * @property LambdaEndpointSummary|null $LambdaEndpoint
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property string|null $OwnerAccountId
 * @property string|null $ServiceId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $State
 * @property array<string, string>|null $Tags
 * @property UrlEndpointSummary|null $UrlEndpoint
 * @property string|null $VpcId
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     Arn?: string|null,
     *     CreatedByAccountId?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     EndpointType?: 'LAMBDA'|'URL'|null,
     *     EnvironmentId?: string|null,
     *     Error?: ErrorResponse|null,
     *     LambdaEndpoint?: LambdaEndpointSummary|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     OwnerAccountId?: string|null,
     *     ServiceId?: string|null,
     *     State?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null,
     *     Tags?: array<string, string>|null,
     *     UrlEndpoint?: UrlEndpointSummary|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

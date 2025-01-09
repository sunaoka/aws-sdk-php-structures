<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $Description
 * @property 'LAMBDA'|'URL' $EndpointType
 * @property string $EnvironmentId
 * @property ErrorResponse $Error
 * @property LambdaEndpointSummary $LambdaEndpoint
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property string $OwnerAccountId
 * @property string $ServiceId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $State
 * @property array<string, string> $Tags
 * @property UrlEndpointSummary $UrlEndpoint
 * @property string $VpcId
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     Arn?: string,
     *     CreatedByAccountId?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     EndpointType?: 'LAMBDA'|'URL',
     *     EnvironmentId?: string,
     *     Error?: ErrorResponse,
     *     LambdaEndpoint?: LambdaEndpointSummary,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     OwnerAccountId?: string,
     *     ServiceId?: string,
     *     State?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED',
     *     Tags?: array<string, string>,
     *     UrlEndpoint?: UrlEndpointSummary,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

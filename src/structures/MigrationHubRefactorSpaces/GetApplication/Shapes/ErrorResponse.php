<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property array<string, string> $AdditionalDetails
 * @property 'INVALID_RESOURCE_STATE'|'RESOURCE_LIMIT_EXCEEDED'|'RESOURCE_CREATION_FAILURE'|'RESOURCE_UPDATE_FAILURE'|'SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE'|'RESOURCE_DELETION_FAILURE'|'RESOURCE_RETRIEVAL_FAILURE'|'RESOURCE_IN_USE'|'RESOURCE_NOT_FOUND'|'STATE_TRANSITION_FAILURE'|'REQUEST_LIMIT_EXCEEDED'|'NOT_AUTHORIZED' $Code
 * @property string $Message
 * @property string $ResourceIdentifier
 * @property 'ENVIRONMENT'|'APPLICATION'|'ROUTE'|'SERVICE'|'TRANSIT_GATEWAY'|'TRANSIT_GATEWAY_ATTACHMENT'|'API_GATEWAY'|'NLB'|'TARGET_GROUP'|'LOAD_BALANCER_LISTENER'|'VPC_LINK'|'LAMBDA'|'VPC'|'SUBNET'|'ROUTE_TABLE'|'SECURITY_GROUP'|'VPC_ENDPOINT_SERVICE_CONFIGURATION'|'RESOURCE_SHARE'|'IAM_ROLE' $ResourceType
 */
class ErrorResponse extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     AdditionalDetails?: array<string, string>,
     *     Code?: 'INVALID_RESOURCE_STATE'|'RESOURCE_LIMIT_EXCEEDED'|'RESOURCE_CREATION_FAILURE'|'RESOURCE_UPDATE_FAILURE'|'SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE'|'RESOURCE_DELETION_FAILURE'|'RESOURCE_RETRIEVAL_FAILURE'|'RESOURCE_IN_USE'|'RESOURCE_NOT_FOUND'|'STATE_TRANSITION_FAILURE'|'REQUEST_LIMIT_EXCEEDED'|'NOT_AUTHORIZED',
     *     Message?: string,
     *     ResourceIdentifier?: string,
     *     ResourceType?: 'ENVIRONMENT'|'APPLICATION'|'ROUTE'|'SERVICE'|'TRANSIT_GATEWAY'|'TRANSIT_GATEWAY_ATTACHMENT'|'API_GATEWAY'|'NLB'|'TARGET_GROUP'|'LOAD_BALANCER_LISTENER'|'VPC_LINK'|'LAMBDA'|'VPC'|'SUBNET'|'ROUTE_TABLE'|'SECURITY_GROUP'|'VPC_ENDPOINT_SERVICE_CONFIGURATION'|'RESOURCE_SHARE'|'IAM_ROLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

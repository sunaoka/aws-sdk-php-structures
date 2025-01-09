<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetServicePrincipalName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectorArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DirectoryRegistrationArn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 * @property 'DIRECTORY_ACCESS_DENIED'|'DIRECTORY_NOT_REACHABLE'|'DIRECTORY_RESOURCE_NOT_FOUND'|'SPN_EXISTS_ON_DIFFERENT_AD_OBJECT'|'INTERNAL_FAILURE' $StatusReason
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class ServicePrincipalName extends Shape
{
    /**
     * @param array{
     *     ConnectorArn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DirectoryRegistrationArn?: string,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED',
     *     StatusReason?: 'DIRECTORY_ACCESS_DENIED'|'DIRECTORY_NOT_REACHABLE'|'DIRECTORY_RESOURCE_NOT_FOUND'|'SPN_EXISTS_ON_DIFFERENT_AD_OBJECT'|'INTERNAL_FAILURE',
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

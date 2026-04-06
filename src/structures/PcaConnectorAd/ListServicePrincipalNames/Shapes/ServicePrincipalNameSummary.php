<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListServicePrincipalNames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectorArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $DirectoryRegistrationArn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property 'DIRECTORY_ACCESS_DENIED'|'DIRECTORY_NOT_REACHABLE'|'DIRECTORY_RESOURCE_NOT_FOUND'|'SPN_EXISTS_ON_DIFFERENT_AD_OBJECT'|'SPN_LIMIT_EXCEEDED'|'INTERNAL_FAILURE'|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class ServicePrincipalNameSummary extends Shape
{
    /**
     * @param array{
     *     ConnectorArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DirectoryRegistrationArn?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null,
     *     StatusReason?: 'DIRECTORY_ACCESS_DENIED'|'DIRECTORY_NOT_REACHABLE'|'DIRECTORY_RESOURCE_NOT_FOUND'|'SPN_EXISTS_ON_DIFFERENT_AD_OBJECT'|'SPN_LIMIT_EXCEEDED'|'INTERNAL_FAILURE'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

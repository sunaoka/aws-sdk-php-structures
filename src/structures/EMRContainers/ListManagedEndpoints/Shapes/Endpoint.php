<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListManagedEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $virtualClusterId
 * @property string|null $type
 * @property 'CREATING'|'ACTIVE'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS'|null $state
 * @property string|null $releaseLabel
 * @property string|null $executionRoleArn
 * @property string|null $certificateArn
 * @property Certificate|null $certificateAuthority
 * @property ConfigurationOverrides|null $configurationOverrides
 * @property string|null $serverUrl
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $securityGroup
 * @property list<string>|null $subnetIds
 * @property string|null $stateDetails
 * @property 'INTERNAL_ERROR'|'USER_ERROR'|'VALIDATION_ERROR'|'CLUSTER_UNAVAILABLE'|null $failureReason
 * @property array<string, string>|null $tags
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     arn?: string|null,
     *     virtualClusterId?: string|null,
     *     type?: string|null,
     *     state?: 'CREATING'|'ACTIVE'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS'|null,
     *     releaseLabel?: string|null,
     *     executionRoleArn?: string|null,
     *     certificateArn?: string|null,
     *     certificateAuthority?: Certificate|null,
     *     configurationOverrides?: ConfigurationOverrides|null,
     *     serverUrl?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     securityGroup?: string|null,
     *     subnetIds?: list<string>|null,
     *     stateDetails?: string|null,
     *     failureReason?: 'INTERNAL_ERROR'|'USER_ERROR'|'VALIDATION_ERROR'|'CLUSTER_UNAVAILABLE'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

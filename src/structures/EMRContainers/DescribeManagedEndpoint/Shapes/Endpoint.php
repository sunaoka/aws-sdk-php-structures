<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeManagedEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property string $virtualClusterId
 * @property string $type
 * @property 'CREATING'|'ACTIVE'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS' $state
 * @property string $releaseLabel
 * @property string $executionRoleArn
 * @property string $certificateArn
 * @property Certificate $certificateAuthority
 * @property ConfigurationOverrides $configurationOverrides
 * @property string $serverUrl
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $securityGroup
 * @property list<string> $subnetIds
 * @property string $stateDetails
 * @property 'INTERNAL_ERROR'|'USER_ERROR'|'VALIDATION_ERROR'|'CLUSTER_UNAVAILABLE' $failureReason
 * @property array<string, string> $tags
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     arn?: string,
     *     virtualClusterId?: string,
     *     type?: string,
     *     state?: 'CREATING'|'ACTIVE'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS',
     *     releaseLabel?: string,
     *     executionRoleArn?: string,
     *     certificateArn?: string,
     *     certificateAuthority?: Certificate,
     *     configurationOverrides?: ConfigurationOverrides,
     *     serverUrl?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     securityGroup?: string,
     *     subnetIds?: list<string>,
     *     stateDetails?: string,
     *     failureReason?: 'INTERNAL_ERROR'|'USER_ERROR'|'VALIDATION_ERROR'|'CLUSTER_UNAVAILABLE',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateLaunchProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property list<string>|null $ec2SubnetIds
 * @property string|null $launchProfileId
 * @property list<string>|null $launchProfileProtocolVersions
 * @property string|null $name
 * @property 'CREATE_IN_PROGRESS'|'READY'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DELETE_FAILED'|'CREATE_FAILED'|'UPDATE_FAILED'|null $state
 * @property 'LAUNCH_PROFILE_CREATED'|'LAUNCH_PROFILE_UPDATED'|'LAUNCH_PROFILE_DELETED'|'LAUNCH_PROFILE_CREATE_IN_PROGRESS'|'LAUNCH_PROFILE_UPDATE_IN_PROGRESS'|'LAUNCH_PROFILE_DELETE_IN_PROGRESS'|'INTERNAL_ERROR'|'STREAMING_IMAGE_NOT_FOUND'|'STREAMING_IMAGE_NOT_READY'|'LAUNCH_PROFILE_WITH_STREAM_SESSIONS_NOT_DELETED'|'ENCRYPTION_KEY_ACCESS_DENIED'|'ENCRYPTION_KEY_NOT_FOUND'|'INVALID_SUBNETS_PROVIDED'|'INVALID_INSTANCE_TYPES_PROVIDED'|'INVALID_SUBNETS_COMBINATION'|null $statusCode
 * @property string|null $statusMessage
 * @property StreamConfiguration|null $streamConfiguration
 * @property list<string>|null $studioComponentIds
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property list<ValidationResult>|null $validationResults
 */
class LaunchProfile extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     description?: string|null,
     *     ec2SubnetIds?: list<string>|null,
     *     launchProfileId?: string|null,
     *     launchProfileProtocolVersions?: list<string>|null,
     *     name?: string|null,
     *     state?: 'CREATE_IN_PROGRESS'|'READY'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DELETE_FAILED'|'CREATE_FAILED'|'UPDATE_FAILED'|null,
     *     statusCode?: 'LAUNCH_PROFILE_CREATED'|'LAUNCH_PROFILE_UPDATED'|'LAUNCH_PROFILE_DELETED'|'LAUNCH_PROFILE_CREATE_IN_PROGRESS'|'LAUNCH_PROFILE_UPDATE_IN_PROGRESS'|'LAUNCH_PROFILE_DELETE_IN_PROGRESS'|'INTERNAL_ERROR'|'STREAMING_IMAGE_NOT_FOUND'|'STREAMING_IMAGE_NOT_READY'|'LAUNCH_PROFILE_WITH_STREAM_SESSIONS_NOT_DELETED'|'ENCRYPTION_KEY_ACCESS_DENIED'|'ENCRYPTION_KEY_NOT_FOUND'|'INVALID_SUBNETS_PROVIDED'|'INVALID_INSTANCE_TYPES_PROVIDED'|'INVALID_SUBNETS_COMBINATION'|null,
     *     statusMessage?: string|null,
     *     streamConfiguration?: StreamConfiguration|null,
     *     studioComponentIds?: list<string>|null,
     *     tags?: array<string, string>|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     validationResults?: list<ValidationResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

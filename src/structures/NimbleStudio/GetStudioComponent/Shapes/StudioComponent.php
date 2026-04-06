<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStudioComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property StudioComponentConfiguration|null $configuration
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property list<string>|null $ec2SecurityGroupIds
 * @property list<StudioComponentInitializationScript>|null $initializationScripts
 * @property string|null $name
 * @property string|null $runtimeRoleArn
 * @property list<ScriptParameterKeyValue>|null $scriptParameters
 * @property string|null $secureInitializationRoleArn
 * @property 'CREATE_IN_PROGRESS'|'READY'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DELETE_FAILED'|'CREATE_FAILED'|'UPDATE_FAILED'|null $state
 * @property 'ACTIVE_DIRECTORY_ALREADY_EXISTS'|'STUDIO_COMPONENT_CREATED'|'STUDIO_COMPONENT_UPDATED'|'STUDIO_COMPONENT_DELETED'|'ENCRYPTION_KEY_ACCESS_DENIED'|'ENCRYPTION_KEY_NOT_FOUND'|'STUDIO_COMPONENT_CREATE_IN_PROGRESS'|'STUDIO_COMPONENT_UPDATE_IN_PROGRESS'|'STUDIO_COMPONENT_DELETE_IN_PROGRESS'|'INTERNAL_ERROR'|null $statusCode
 * @property string|null $statusMessage
 * @property string|null $studioComponentId
 * @property 'AWS_MANAGED_MICROSOFT_AD'|'AMAZON_FSX_FOR_WINDOWS'|'AMAZON_FSX_FOR_LUSTRE'|'CUSTOM'|null $subtype
 * @property array<string, string>|null $tags
 * @property 'ACTIVE_DIRECTORY'|'SHARED_FILE_SYSTEM'|'COMPUTE_FARM'|'LICENSE_SERVICE'|'CUSTOM'|null $type
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class StudioComponent extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     configuration?: StudioComponentConfiguration|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     description?: string|null,
     *     ec2SecurityGroupIds?: list<string>|null,
     *     initializationScripts?: list<StudioComponentInitializationScript>|null,
     *     name?: string|null,
     *     runtimeRoleArn?: string|null,
     *     scriptParameters?: list<ScriptParameterKeyValue>|null,
     *     secureInitializationRoleArn?: string|null,
     *     state?: 'CREATE_IN_PROGRESS'|'READY'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DELETE_FAILED'|'CREATE_FAILED'|'UPDATE_FAILED'|null,
     *     statusCode?: 'ACTIVE_DIRECTORY_ALREADY_EXISTS'|'STUDIO_COMPONENT_CREATED'|'STUDIO_COMPONENT_UPDATED'|'STUDIO_COMPONENT_DELETED'|'ENCRYPTION_KEY_ACCESS_DENIED'|'ENCRYPTION_KEY_NOT_FOUND'|'STUDIO_COMPONENT_CREATE_IN_PROGRESS'|'STUDIO_COMPONENT_UPDATE_IN_PROGRESS'|'STUDIO_COMPONENT_DELETE_IN_PROGRESS'|'INTERNAL_ERROR'|null,
     *     statusMessage?: string|null,
     *     studioComponentId?: string|null,
     *     subtype?: 'AWS_MANAGED_MICROSOFT_AD'|'AMAZON_FSX_FOR_WINDOWS'|'AMAZON_FSX_FOR_LUSTRE'|'CUSTOM'|null,
     *     tags?: array<string, string>|null,
     *     type?: 'ACTIVE_DIRECTORY'|'SHARED_FILE_SYSTEM'|'COMPUTE_FARM'|'LICENSE_SERVICE'|'CUSTOM'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

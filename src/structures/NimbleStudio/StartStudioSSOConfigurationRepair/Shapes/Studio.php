<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\StartStudioSSOConfigurationRepair\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $adminRoleArn
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $displayName
 * @property string|null $homeRegion
 * @property string|null $ssoClientId
 * @property 'CREATE_IN_PROGRESS'|'READY'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DELETE_FAILED'|'CREATE_FAILED'|'UPDATE_FAILED'|null $state
 * @property 'STUDIO_CREATED'|'STUDIO_DELETED'|'STUDIO_UPDATED'|'STUDIO_CREATE_IN_PROGRESS'|'STUDIO_UPDATE_IN_PROGRESS'|'STUDIO_DELETE_IN_PROGRESS'|'STUDIO_WITH_LAUNCH_PROFILES_NOT_DELETED'|'STUDIO_WITH_STUDIO_COMPONENTS_NOT_DELETED'|'STUDIO_WITH_STREAMING_IMAGES_NOT_DELETED'|'AWS_SSO_NOT_ENABLED'|'AWS_SSO_ACCESS_DENIED'|'ROLE_NOT_OWNED_BY_STUDIO_OWNER'|'ROLE_COULD_NOT_BE_ASSUMED'|'INTERNAL_ERROR'|'ENCRYPTION_KEY_NOT_FOUND'|'ENCRYPTION_KEY_ACCESS_DENIED'|'AWS_SSO_CONFIGURATION_REPAIRED'|'AWS_SSO_CONFIGURATION_REPAIR_IN_PROGRESS'|'AWS_STS_REGION_DISABLED'|null $statusCode
 * @property string|null $statusMessage
 * @property StudioEncryptionConfiguration|null $studioEncryptionConfiguration
 * @property string|null $studioId
 * @property string|null $studioName
 * @property string|null $studioUrl
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $userRoleArn
 */
class Studio extends Shape
{
    /**
     * @param array{
     *     adminRoleArn?: string|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     displayName?: string|null,
     *     homeRegion?: string|null,
     *     ssoClientId?: string|null,
     *     state?: 'CREATE_IN_PROGRESS'|'READY'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DELETE_FAILED'|'CREATE_FAILED'|'UPDATE_FAILED'|null,
     *     statusCode?: 'STUDIO_CREATED'|'STUDIO_DELETED'|'STUDIO_UPDATED'|'STUDIO_CREATE_IN_PROGRESS'|'STUDIO_UPDATE_IN_PROGRESS'|'STUDIO_DELETE_IN_PROGRESS'|'STUDIO_WITH_LAUNCH_PROFILES_NOT_DELETED'|'STUDIO_WITH_STUDIO_COMPONENTS_NOT_DELETED'|'STUDIO_WITH_STREAMING_IMAGES_NOT_DELETED'|'AWS_SSO_NOT_ENABLED'|'AWS_SSO_ACCESS_DENIED'|'ROLE_NOT_OWNED_BY_STUDIO_OWNER'|'ROLE_COULD_NOT_BE_ASSUMED'|'INTERNAL_ERROR'|'ENCRYPTION_KEY_NOT_FOUND'|'ENCRYPTION_KEY_ACCESS_DENIED'|'AWS_SSO_CONFIGURATION_REPAIRED'|'AWS_SSO_CONFIGURATION_REPAIR_IN_PROGRESS'|'AWS_STS_REGION_DISABLED'|null,
     *     statusMessage?: string|null,
     *     studioEncryptionConfiguration?: StudioEncryptionConfiguration|null,
     *     studioId?: string|null,
     *     studioName?: string|null,
     *     studioUrl?: string|null,
     *     tags?: array<string, string>|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     userRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

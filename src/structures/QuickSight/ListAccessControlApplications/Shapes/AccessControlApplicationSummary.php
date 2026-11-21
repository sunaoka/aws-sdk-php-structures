<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAccessControlApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $Name
 * @property string $Namespace
 * @property 'OIDC' $AuthenticationType
 * @property 'ENABLED'|'DISABLED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $TenantUrl
 * @property IdpAuthorizingConfigSummary|null $IdpAuthorizingConfiguration
 * @property QuickAuthenticationConfig|null $QuickAuthenticationConfiguration
 * @property string|null $Description
 */
class AccessControlApplicationSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Arn: string,
     *     Name: string,
     *     Namespace: string,
     *     AuthenticationType: 'OIDC',
     *     Status: 'ENABLED'|'DISABLED',
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime: \Aws\Api\DateTimeResult,
     *     TenantUrl: string,
     *     IdpAuthorizingConfiguration?: IdpAuthorizingConfigSummary|null,
     *     QuickAuthenticationConfiguration?: QuickAuthenticationConfig|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

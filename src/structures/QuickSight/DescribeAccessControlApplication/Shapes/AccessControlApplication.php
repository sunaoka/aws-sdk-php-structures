<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccessControlApplication\Shapes;

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
 * @property string|null $Description
 * @property string|null $IdcApplicationArn
 * @property IdpAuthorizingConfig|null $IdpAuthorizingConfiguration
 * @property QuickAuthenticationConfig|null $QuickAuthenticationConfiguration
 */
class AccessControlApplication extends Shape
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
     *     Description?: string|null,
     *     IdcApplicationArn?: string|null,
     *     IdpAuthorizingConfiguration?: IdpAuthorizingConfig|null,
     *     QuickAuthenticationConfiguration?: QuickAuthenticationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

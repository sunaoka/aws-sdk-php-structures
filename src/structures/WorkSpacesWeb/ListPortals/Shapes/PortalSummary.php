<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $portalArn
 * @property 'AppStream'|null $rendererType
 * @property 'Chrome'|null $browserType
 * @property 'Incomplete'|'Pending'|'Active'|null $portalStatus
 * @property string|null $portalEndpoint
 * @property string|null $displayName
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $browserSettingsArn
 * @property string|null $dataProtectionSettingsArn
 * @property string|null $userSettingsArn
 * @property string|null $networkSettingsArn
 * @property string|null $sessionLoggerArn
 * @property string|null $trustStoreArn
 * @property string|null $userAccessLoggingSettingsArn
 * @property 'Standard'|'IAM_Identity_Center'|null $authenticationType
 * @property string|null $ipAccessSettingsArn
 * @property 'standard.regular'|'standard.large'|'standard.xlarge'|null $instanceType
 * @property int<1, 5000>|null $maxConcurrentSessions
 */
class PortalSummary extends Shape
{
    /**
     * @param array{
     *     portalArn: string,
     *     rendererType?: 'AppStream'|null,
     *     browserType?: 'Chrome'|null,
     *     portalStatus?: 'Incomplete'|'Pending'|'Active'|null,
     *     portalEndpoint?: string|null,
     *     displayName?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     browserSettingsArn?: string|null,
     *     dataProtectionSettingsArn?: string|null,
     *     userSettingsArn?: string|null,
     *     networkSettingsArn?: string|null,
     *     sessionLoggerArn?: string|null,
     *     trustStoreArn?: string|null,
     *     userAccessLoggingSettingsArn?: string|null,
     *     authenticationType?: 'Standard'|'IAM_Identity_Center'|null,
     *     ipAccessSettingsArn?: string|null,
     *     instanceType?: 'standard.regular'|'standard.large'|'standard.xlarge'|null,
     *     maxConcurrentSessions?: int<1, 5000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

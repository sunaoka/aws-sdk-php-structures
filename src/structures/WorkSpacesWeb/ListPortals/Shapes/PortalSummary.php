<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Standard'|'IAM_Identity_Center' $authenticationType
 * @property string $browserSettingsArn
 * @property 'Chrome' $browserType
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property string $dataProtectionSettingsArn
 * @property string $displayName
 * @property 'standard.regular'|'standard.large'|'standard.xlarge' $instanceType
 * @property string $ipAccessSettingsArn
 * @property int<1, 5000> $maxConcurrentSessions
 * @property string $networkSettingsArn
 * @property string $portalArn
 * @property string $portalEndpoint
 * @property 'Incomplete'|'Pending'|'Active' $portalStatus
 * @property 'AppStream' $rendererType
 * @property string $trustStoreArn
 * @property string $userAccessLoggingSettingsArn
 * @property string $userSettingsArn
 */
class PortalSummary extends Shape
{
    /**
     * @param array{
     *     authenticationType?: 'Standard'|'IAM_Identity_Center',
     *     browserSettingsArn?: string,
     *     browserType?: 'Chrome',
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     dataProtectionSettingsArn?: string,
     *     displayName?: string,
     *     instanceType?: 'standard.regular'|'standard.large'|'standard.xlarge',
     *     ipAccessSettingsArn?: string,
     *     maxConcurrentSessions?: int<1, 5000>,
     *     networkSettingsArn?: string,
     *     portalArn: string,
     *     portalEndpoint?: string,
     *     portalStatus?: 'Incomplete'|'Pending'|'Active',
     *     rendererType?: 'AppStream',
     *     trustStoreArn?: string,
     *     userAccessLoggingSettingsArn?: string,
     *     userSettingsArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

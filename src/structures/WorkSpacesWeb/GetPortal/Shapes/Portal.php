<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetPortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $additionalEncryptionContext
 * @property 'Standard'|'IAM_Identity_Center' $authenticationType
 * @property string $browserSettingsArn
 * @property 'Chrome' $browserType
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property string $customerManagedKey
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
 * @property string $statusReason
 * @property string $trustStoreArn
 * @property string $userAccessLoggingSettingsArn
 * @property string $userSettingsArn
 */
class Portal extends Shape
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>,
     *     authenticationType?: 'Standard'|'IAM_Identity_Center',
     *     browserSettingsArn?: string,
     *     browserType?: 'Chrome',
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     customerManagedKey?: string,
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
     *     statusReason?: string,
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

<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $additionalEncryptionContext
 * @property 'Standard'|'IAM_Identity_Center'|null $authenticationType
 * @property string|null $browserSettingsArn
 * @property 'Chrome'|null $browserType
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $customerManagedKey
 * @property string|null $dataProtectionSettingsArn
 * @property string|null $displayName
 * @property 'standard.regular'|'standard.large'|'standard.xlarge'|null $instanceType
 * @property string|null $ipAccessSettingsArn
 * @property int<1, 5000>|null $maxConcurrentSessions
 * @property string|null $networkSettingsArn
 * @property string $portalArn
 * @property string|null $portalEndpoint
 * @property 'Incomplete'|'Pending'|'Active'|null $portalStatus
 * @property 'AppStream'|null $rendererType
 * @property string|null $statusReason
 * @property string|null $trustStoreArn
 * @property string|null $userAccessLoggingSettingsArn
 * @property string|null $userSettingsArn
 */
class Portal extends Shape
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>|null,
     *     authenticationType?: 'Standard'|'IAM_Identity_Center'|null,
     *     browserSettingsArn?: string|null,
     *     browserType?: 'Chrome'|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     customerManagedKey?: string|null,
     *     dataProtectionSettingsArn?: string|null,
     *     displayName?: string|null,
     *     instanceType?: 'standard.regular'|'standard.large'|'standard.xlarge'|null,
     *     ipAccessSettingsArn?: string|null,
     *     maxConcurrentSessions?: int<1, 5000>|null,
     *     networkSettingsArn?: string|null,
     *     portalArn: string,
     *     portalEndpoint?: string|null,
     *     portalStatus?: 'Incomplete'|'Pending'|'Active'|null,
     *     rendererType?: 'AppStream'|null,
     *     statusReason?: string|null,
     *     trustStoreArn?: string|null,
     *     userAccessLoggingSettingsArn?: string|null,
     *     userSettingsArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

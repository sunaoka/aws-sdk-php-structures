<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeLaunchConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $launchConfigurationTemplateID
 * @property string|null $arn
 * @property PostLaunchActions|null $postLaunchActions
 * @property bool|null $enableMapAutoTagging
 * @property string|null $mapAutoTaggingMpeID
 * @property array<string, string>|null $tags
 * @property string|null $ec2LaunchTemplateID
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property 'NONE'|'BASIC'|null $targetInstanceTypeRightSizingMethod
 * @property bool|null $copyPrivateIp
 * @property bool|null $associatePublicIpAddress
 * @property bool|null $copyTags
 * @property Licensing|null $licensing
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null $bootMode
 * @property int<0, max>|null $smallVolumeMaxSize
 * @property LaunchTemplateDiskConf|null $smallVolumeConf
 * @property LaunchTemplateDiskConf|null $largeVolumeConf
 * @property bool|null $enableParametersEncryption
 * @property string|null $parametersEncryptionKey
 */
class LaunchConfigurationTemplate extends Shape
{
    /**
     * @param array{
     *     launchConfigurationTemplateID: string,
     *     arn?: string|null,
     *     postLaunchActions?: PostLaunchActions|null,
     *     enableMapAutoTagging?: bool|null,
     *     mapAutoTaggingMpeID?: string|null,
     *     tags?: array<string, string>|null,
     *     ec2LaunchTemplateID?: string|null,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|null,
     *     copyPrivateIp?: bool|null,
     *     associatePublicIpAddress?: bool|null,
     *     copyTags?: bool|null,
     *     licensing?: Licensing|null,
     *     bootMode?: 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null,
     *     smallVolumeMaxSize?: int<0, max>|null,
     *     smallVolumeConf?: LaunchTemplateDiskConf|null,
     *     largeVolumeConf?: LaunchTemplateDiskConf|null,
     *     enableParametersEncryption?: bool|null,
     *     parametersEncryptionKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeLaunchConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property bool|null $associatePublicIpAddress
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null $bootMode
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property string|null $ec2LaunchTemplateID
 * @property bool|null $enableMapAutoTagging
 * @property LaunchTemplateDiskConf|null $largeVolumeConf
 * @property string $launchConfigurationTemplateID
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property Licensing|null $licensing
 * @property string|null $mapAutoTaggingMpeID
 * @property PostLaunchActions|null $postLaunchActions
 * @property LaunchTemplateDiskConf|null $smallVolumeConf
 * @property int<0, max>|null $smallVolumeMaxSize
 * @property array<string, string>|null $tags
 * @property 'NONE'|'BASIC'|null $targetInstanceTypeRightSizingMethod
 */
class LaunchConfigurationTemplate extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     associatePublicIpAddress?: bool|null,
     *     bootMode?: 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null,
     *     copyPrivateIp?: bool|null,
     *     copyTags?: bool|null,
     *     ec2LaunchTemplateID?: string|null,
     *     enableMapAutoTagging?: bool|null,
     *     largeVolumeConf?: LaunchTemplateDiskConf|null,
     *     launchConfigurationTemplateID: string,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     licensing?: Licensing|null,
     *     mapAutoTaggingMpeID?: string|null,
     *     postLaunchActions?: PostLaunchActions|null,
     *     smallVolumeConf?: LaunchTemplateDiskConf|null,
     *     smallVolumeMaxSize?: int<0, max>|null,
     *     tags?: array<string, string>|null,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

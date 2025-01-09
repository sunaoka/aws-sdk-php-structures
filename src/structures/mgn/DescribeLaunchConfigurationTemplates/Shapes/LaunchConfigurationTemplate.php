<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeLaunchConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property bool $associatePublicIpAddress
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE' $bootMode
 * @property bool $copyPrivateIp
 * @property bool $copyTags
 * @property string $ec2LaunchTemplateID
 * @property bool $enableMapAutoTagging
 * @property LaunchTemplateDiskConf $largeVolumeConf
 * @property string $launchConfigurationTemplateID
 * @property 'STOPPED'|'STARTED' $launchDisposition
 * @property Licensing $licensing
 * @property string $mapAutoTaggingMpeID
 * @property PostLaunchActions $postLaunchActions
 * @property LaunchTemplateDiskConf $smallVolumeConf
 * @property int $smallVolumeMaxSize
 * @property array<string, string> $tags
 * @property 'NONE'|'BASIC' $targetInstanceTypeRightSizingMethod
 */
class LaunchConfigurationTemplate extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     associatePublicIpAddress?: bool,
     *     bootMode?: 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE',
     *     copyPrivateIp?: bool,
     *     copyTags?: bool,
     *     ec2LaunchTemplateID?: string,
     *     enableMapAutoTagging?: bool,
     *     largeVolumeConf?: LaunchTemplateDiskConf,
     *     launchConfigurationTemplateID: string,
     *     launchDisposition?: 'STOPPED'|'STARTED',
     *     licensing?: Licensing,
     *     mapAutoTaggingMpeID?: string,
     *     postLaunchActions?: PostLaunchActions,
     *     smallVolumeConf?: LaunchTemplateDiskConf,
     *     smallVolumeMaxSize?: int,
     *     tags?: array<string, string>,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

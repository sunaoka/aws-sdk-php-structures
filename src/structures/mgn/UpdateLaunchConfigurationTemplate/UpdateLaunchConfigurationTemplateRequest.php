<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $associatePublicIpAddress
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE' $bootMode
 * @property bool $copyPrivateIp
 * @property bool $copyTags
 * @property bool $enableMapAutoTagging
 * @property Shapes\LaunchTemplateDiskConf $largeVolumeConf
 * @property string $launchConfigurationTemplateID
 * @property 'STOPPED'|'STARTED' $launchDisposition
 * @property Shapes\Licensing $licensing
 * @property string $mapAutoTaggingMpeID
 * @property Shapes\PostLaunchActions $postLaunchActions
 * @property Shapes\LaunchTemplateDiskConf $smallVolumeConf
 * @property int<0, max> $smallVolumeMaxSize
 * @property 'NONE'|'BASIC' $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     associatePublicIpAddress?: bool,
     *     bootMode?: 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE',
     *     copyPrivateIp?: bool,
     *     copyTags?: bool,
     *     enableMapAutoTagging?: bool,
     *     largeVolumeConf?: Shapes\LaunchTemplateDiskConf,
     *     launchConfigurationTemplateID: string,
     *     launchDisposition?: 'STOPPED'|'STARTED',
     *     licensing?: Shapes\Licensing,
     *     mapAutoTaggingMpeID?: string,
     *     postLaunchActions?: Shapes\PostLaunchActions,
     *     smallVolumeConf?: Shapes\LaunchTemplateDiskConf,
     *     smallVolumeMaxSize?: int<0, max>,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

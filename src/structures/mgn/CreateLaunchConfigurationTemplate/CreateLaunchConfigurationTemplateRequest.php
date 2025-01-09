<?php

namespace Sunaoka\Aws\Structures\mgn\CreateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $associatePublicIpAddress
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE' $bootMode
 * @property bool $copyPrivateIp
 * @property bool $copyTags
 * @property bool $enableMapAutoTagging
 * @property Shapes\LaunchTemplateDiskConf $largeVolumeConf
 * @property 'STOPPED'|'STARTED' $launchDisposition
 * @property Shapes\Licensing $licensing
 * @property string $mapAutoTaggingMpeID
 * @property Shapes\PostLaunchActions $postLaunchActions
 * @property Shapes\LaunchTemplateDiskConf $smallVolumeConf
 * @property int $smallVolumeMaxSize
 * @property array<string, string> $tags
 * @property 'NONE'|'BASIC' $targetInstanceTypeRightSizingMethod
 */
class CreateLaunchConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     associatePublicIpAddress?: bool,
     *     bootMode?: 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE',
     *     copyPrivateIp?: bool,
     *     copyTags?: bool,
     *     enableMapAutoTagging?: bool,
     *     largeVolumeConf?: Shapes\LaunchTemplateDiskConf,
     *     launchDisposition?: 'STOPPED'|'STARTED',
     *     licensing?: Shapes\Licensing,
     *     mapAutoTaggingMpeID?: string,
     *     postLaunchActions?: Shapes\PostLaunchActions,
     *     smallVolumeConf?: Shapes\LaunchTemplateDiskConf,
     *     smallVolumeMaxSize?: int,
     *     tags?: array<string, string>,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

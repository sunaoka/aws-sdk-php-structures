<?php

namespace Sunaoka\Aws\Structures\mgn\CreateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $associatePublicIpAddress
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null $bootMode
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property bool|null $enableMapAutoTagging
 * @property Shapes\LaunchTemplateDiskConf|null $largeVolumeConf
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property Shapes\Licensing|null $licensing
 * @property string|null $mapAutoTaggingMpeID
 * @property Shapes\PostLaunchActions|null $postLaunchActions
 * @property Shapes\LaunchTemplateDiskConf|null $smallVolumeConf
 * @property int<0, max>|null $smallVolumeMaxSize
 * @property array<string, string>|null $tags
 * @property 'NONE'|'BASIC'|null $targetInstanceTypeRightSizingMethod
 */
class CreateLaunchConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     associatePublicIpAddress?: bool|null,
     *     bootMode?: 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null,
     *     copyPrivateIp?: bool|null,
     *     copyTags?: bool|null,
     *     enableMapAutoTagging?: bool|null,
     *     largeVolumeConf?: Shapes\LaunchTemplateDiskConf|null,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     licensing?: Shapes\Licensing|null,
     *     mapAutoTaggingMpeID?: string|null,
     *     postLaunchActions?: Shapes\PostLaunchActions|null,
     *     smallVolumeConf?: Shapes\LaunchTemplateDiskConf|null,
     *     smallVolumeMaxSize?: int<0, max>|null,
     *     tags?: array<string, string>|null,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

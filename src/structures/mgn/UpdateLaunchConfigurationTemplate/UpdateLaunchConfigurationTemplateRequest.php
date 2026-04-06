<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $associatePublicIpAddress
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null $bootMode
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property bool|null $enableMapAutoTagging
 * @property Shapes\LaunchTemplateDiskConf|null $largeVolumeConf
 * @property string $launchConfigurationTemplateID
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property Shapes\Licensing|null $licensing
 * @property string|null $mapAutoTaggingMpeID
 * @property Shapes\PostLaunchActions|null $postLaunchActions
 * @property Shapes\LaunchTemplateDiskConf|null $smallVolumeConf
 * @property int<0, max>|null $smallVolumeMaxSize
 * @property 'NONE'|'BASIC'|null $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     associatePublicIpAddress?: bool|null,
     *     bootMode?: 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null,
     *     copyPrivateIp?: bool|null,
     *     copyTags?: bool|null,
     *     enableMapAutoTagging?: bool|null,
     *     largeVolumeConf?: Shapes\LaunchTemplateDiskConf|null,
     *     launchConfigurationTemplateID: string,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     licensing?: Shapes\Licensing|null,
     *     mapAutoTaggingMpeID?: string|null,
     *     postLaunchActions?: Shapes\PostLaunchActions|null,
     *     smallVolumeConf?: Shapes\LaunchTemplateDiskConf|null,
     *     smallVolumeMaxSize?: int<0, max>|null,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

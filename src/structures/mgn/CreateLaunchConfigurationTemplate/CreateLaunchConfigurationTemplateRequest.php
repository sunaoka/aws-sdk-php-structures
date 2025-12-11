<?php

namespace Sunaoka\Aws\Structures\mgn\CreateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PostLaunchActions|null $postLaunchActions
 * @property bool|null $enableMapAutoTagging
 * @property string|null $mapAutoTaggingMpeID
 * @property array<string, string>|null $tags
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property 'NONE'|'BASIC'|null $targetInstanceTypeRightSizingMethod
 * @property bool|null $copyPrivateIp
 * @property bool|null $associatePublicIpAddress
 * @property bool|null $copyTags
 * @property Shapes\Licensing|null $licensing
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null $bootMode
 * @property int<0, max>|null $smallVolumeMaxSize
 * @property Shapes\LaunchTemplateDiskConf|null $smallVolumeConf
 * @property Shapes\LaunchTemplateDiskConf|null $largeVolumeConf
 * @property bool|null $enableParametersEncryption
 * @property string|null $parametersEncryptionKey
 */
class CreateLaunchConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     postLaunchActions?: Shapes\PostLaunchActions|null,
     *     enableMapAutoTagging?: bool|null,
     *     mapAutoTaggingMpeID?: string|null,
     *     tags?: array<string, string>|null,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|null,
     *     copyPrivateIp?: bool|null,
     *     associatePublicIpAddress?: bool|null,
     *     copyTags?: bool|null,
     *     licensing?: Shapes\Licensing|null,
     *     bootMode?: 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null,
     *     smallVolumeMaxSize?: int<0, max>|null,
     *     smallVolumeConf?: Shapes\LaunchTemplateDiskConf|null,
     *     largeVolumeConf?: Shapes\LaunchTemplateDiskConf|null,
     *     enableParametersEncryption?: bool|null,
     *     parametersEncryptionKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

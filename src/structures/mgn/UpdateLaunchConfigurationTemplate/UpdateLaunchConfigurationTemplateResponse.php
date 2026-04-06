<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $launchConfigurationTemplateID
 * @property string|null $arn
 * @property Shapes\PostLaunchActions|null $postLaunchActions
 * @property bool|null $enableMapAutoTagging
 * @property string|null $mapAutoTaggingMpeID
 * @property array<string, string>|null $tags
 * @property string|null $ec2LaunchTemplateID
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
class UpdateLaunchConfigurationTemplateResponse extends Response
{
}

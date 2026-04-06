<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property bool|null $associatePublicIpAddress
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null $bootMode
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property string|null $ec2LaunchTemplateID
 * @property bool|null $enableMapAutoTagging
 * @property Shapes\LaunchTemplateDiskConf|null $largeVolumeConf
 * @property string $launchConfigurationTemplateID
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property Shapes\Licensing|null $licensing
 * @property string|null $mapAutoTaggingMpeID
 * @property Shapes\PostLaunchActions|null $postLaunchActions
 * @property Shapes\LaunchTemplateDiskConf|null $smallVolumeConf
 * @property int<0, max>|null $smallVolumeMaxSize
 * @property array<string, string>|null $tags
 * @property 'NONE'|'BASIC'|null $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationTemplateResponse extends Response
{
}

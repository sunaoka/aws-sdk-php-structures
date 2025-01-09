<?php

namespace Sunaoka\Aws\Structures\mgn\CreateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property bool $associatePublicIpAddress
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE' $bootMode
 * @property bool $copyPrivateIp
 * @property bool $copyTags
 * @property string $ec2LaunchTemplateID
 * @property bool $enableMapAutoTagging
 * @property Shapes\LaunchTemplateDiskConf $largeVolumeConf
 * @property string $launchConfigurationTemplateID
 * @property 'STOPPED'|'STARTED' $launchDisposition
 * @property Shapes\Licensing $licensing
 * @property string $mapAutoTaggingMpeID
 * @property Shapes\PostLaunchActions $postLaunchActions
 * @property Shapes\LaunchTemplateDiskConf $smallVolumeConf
 * @property int<0, max> $smallVolumeMaxSize
 * @property array<string, string> $tags
 * @property 'NONE'|'BASIC' $targetInstanceTypeRightSizingMethod
 */
class CreateLaunchConfigurationTemplateResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE' $bootMode
 * @property bool $copyPrivateIp
 * @property bool $copyTags
 * @property string $ec2LaunchTemplateID
 * @property bool $enableMapAutoTagging
 * @property 'STOPPED'|'STARTED' $launchDisposition
 * @property Shapes\Licensing $licensing
 * @property string $mapAutoTaggingMpeID
 * @property string $name
 * @property Shapes\PostLaunchActions $postLaunchActions
 * @property string $sourceServerID
 * @property 'NONE'|'BASIC' $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationResponse extends Response
{
}

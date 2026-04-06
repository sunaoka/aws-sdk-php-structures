<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null $bootMode
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property string|null $ec2LaunchTemplateID
 * @property bool|null $enableMapAutoTagging
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property Shapes\Licensing|null $licensing
 * @property string|null $mapAutoTaggingMpeID
 * @property string|null $name
 * @property Shapes\PostLaunchActions|null $postLaunchActions
 * @property string|null $sourceServerID
 * @property 'NONE'|'BASIC'|null $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationResponse extends Response
{
}

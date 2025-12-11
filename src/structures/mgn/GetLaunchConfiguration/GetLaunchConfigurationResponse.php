<?php

namespace Sunaoka\Aws\Structures\mgn\GetLaunchConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $sourceServerID
 * @property string|null $name
 * @property string|null $ec2LaunchTemplateID
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property 'NONE'|'BASIC'|null $targetInstanceTypeRightSizingMethod
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property Shapes\Licensing|null $licensing
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null $bootMode
 * @property Shapes\PostLaunchActions|null $postLaunchActions
 * @property bool|null $enableMapAutoTagging
 * @property string|null $mapAutoTaggingMpeID
 */
class GetLaunchConfigurationResponse extends Response
{
}

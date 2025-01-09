<?php

namespace Sunaoka\Aws\Structures\drs\GetLaunchConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $copyPrivateIp
 * @property bool $copyTags
 * @property string $ec2LaunchTemplateID
 * @property 'STOPPED'|'STARTED' $launchDisposition
 * @property Shapes\LaunchIntoInstanceProperties $launchIntoInstanceProperties
 * @property Shapes\Licensing $licensing
 * @property string $name
 * @property bool $postLaunchEnabled
 * @property string $sourceServerID
 * @property 'NONE'|'BASIC'|'IN_AWS' $targetInstanceTypeRightSizingMethod
 */
class GetLaunchConfigurationResponse extends Response
{
}

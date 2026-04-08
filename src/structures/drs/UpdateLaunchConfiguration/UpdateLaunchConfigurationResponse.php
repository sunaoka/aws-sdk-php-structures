<?php

namespace Sunaoka\Aws\Structures\drs\UpdateLaunchConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $sourceServerID
 * @property string|null $name
 * @property string|null $ec2LaunchTemplateID
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property 'NONE'|'BASIC'|'IN_AWS'|null $targetInstanceTypeRightSizingMethod
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property Shapes\Licensing|null $licensing
 * @property bool|null $postLaunchEnabled
 * @property Shapes\LaunchIntoInstanceProperties|null $launchIntoInstanceProperties
 */
class UpdateLaunchConfigurationResponse extends Response
{
}

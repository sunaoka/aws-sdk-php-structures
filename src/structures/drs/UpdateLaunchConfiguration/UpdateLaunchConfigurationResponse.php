<?php

namespace Sunaoka\Aws\Structures\drs\UpdateLaunchConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property string|null $ec2LaunchTemplateID
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property Shapes\LaunchIntoInstanceProperties|null $launchIntoInstanceProperties
 * @property Shapes\Licensing|null $licensing
 * @property string|null $name
 * @property bool|null $postLaunchEnabled
 * @property string|null $sourceServerID
 * @property 'NONE'|'BASIC'|'IN_AWS'|null $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationResponse extends Response
{
}

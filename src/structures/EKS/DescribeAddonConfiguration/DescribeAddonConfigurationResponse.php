<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $addonName
 * @property string|null $addonVersion
 * @property string|null $configurationSchema
 * @property list<Shapes\AddonPodIdentityConfiguration>|null $podIdentityConfiguration
 */
class DescribeAddonConfigurationResponse extends Response
{
}

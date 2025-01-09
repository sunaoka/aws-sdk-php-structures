<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $addonName
 * @property string $addonVersion
 * @property string $configurationSchema
 * @property list<Shapes\AddonPodIdentityConfiguration> $podIdentityConfiguration
 */
class DescribeAddonConfigurationResponse extends Response
{
}

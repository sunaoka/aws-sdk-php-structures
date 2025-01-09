<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeIdentityProviderConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IDENTITY_PROVIDER_ONLY'|'IDENTITY_PROVIDER_AND_DIRECTORY' $AuthenticationMode
 * @property Shapes\IdentityCenterConfiguration $IdentityCenterConfiguration
 * @property Shapes\PersonalAccessTokenConfiguration $PersonalAccessTokenConfiguration
 */
class DescribeIdentityProviderConfigurationResponse extends Response
{
}

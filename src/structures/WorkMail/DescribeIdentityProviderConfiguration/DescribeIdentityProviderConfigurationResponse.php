<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeIdentityProviderConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IDENTITY_PROVIDER_ONLY'|'IDENTITY_PROVIDER_AND_DIRECTORY'|null $AuthenticationMode
 * @property Shapes\IdentityCenterConfiguration|null $IdentityCenterConfiguration
 * @property Shapes\PersonalAccessTokenConfiguration|null $PersonalAccessTokenConfiguration
 */
class DescribeIdentityProviderConfigurationResponse extends Response
{
}

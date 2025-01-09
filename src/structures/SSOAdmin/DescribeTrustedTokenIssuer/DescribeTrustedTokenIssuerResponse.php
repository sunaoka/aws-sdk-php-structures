<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeTrustedTokenIssuer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $TrustedTokenIssuerArn
 * @property Shapes\TrustedTokenIssuerConfiguration $TrustedTokenIssuerConfiguration
 * @property 'OIDC_JWT' $TrustedTokenIssuerType
 */
class DescribeTrustedTokenIssuerResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeTrustedTokenIssuer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TrustedTokenIssuerArn
 * @property string|null $Name
 * @property 'OIDC_JWT'|null $TrustedTokenIssuerType
 * @property Shapes\TrustedTokenIssuerConfiguration|null $TrustedTokenIssuerConfiguration
 */
class DescribeTrustedTokenIssuerResponse extends Response
{
}

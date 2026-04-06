<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeTrustedTokenIssuer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $TrustedTokenIssuerArn
 * @property Shapes\TrustedTokenIssuerConfiguration|null $TrustedTokenIssuerConfiguration
 * @property 'OIDC_JWT'|null $TrustedTokenIssuerType
 */
class DescribeTrustedTokenIssuerResponse extends Response
{
}

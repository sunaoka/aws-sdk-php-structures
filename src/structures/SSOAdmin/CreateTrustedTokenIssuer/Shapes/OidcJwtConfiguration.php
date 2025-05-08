<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateTrustedTokenIssuer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IssuerUrl
 * @property string $ClaimAttributePath
 * @property string $IdentityStoreAttributePath
 * @property 'OPEN_ID_DISCOVERY' $JwksRetrievalOption
 */
class OidcJwtConfiguration extends Shape
{
    /**
     * @param array{
     *     IssuerUrl: string,
     *     ClaimAttributePath: string,
     *     IdentityStoreAttributePath: string,
     *     JwksRetrievalOption: 'OPEN_ID_DISCOVERY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

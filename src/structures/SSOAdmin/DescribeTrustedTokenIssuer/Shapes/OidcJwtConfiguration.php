<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeTrustedTokenIssuer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClaimAttributePath
 * @property string $IdentityStoreAttributePath
 * @property string $IssuerUrl
 * @property 'OPEN_ID_DISCOVERY' $JwksRetrievalOption
 */
class OidcJwtConfiguration extends Shape
{
    /**
     * @param array{
     *     ClaimAttributePath: string,
     *     IdentityStoreAttributePath: string,
     *     IssuerUrl: string,
     *     JwksRetrievalOption: 'OPEN_ID_DISCOVERY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

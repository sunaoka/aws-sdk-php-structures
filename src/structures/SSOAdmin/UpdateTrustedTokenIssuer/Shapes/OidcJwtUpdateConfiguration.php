<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateTrustedTokenIssuer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClaimAttributePath
 * @property string $IdentityStoreAttributePath
 * @property 'OPEN_ID_DISCOVERY' $JwksRetrievalOption
 */
class OidcJwtUpdateConfiguration extends Shape
{
    /**
     * @param array{
     *     ClaimAttributePath?: string,
     *     IdentityStoreAttributePath?: string,
     *     JwksRetrievalOption?: 'OPEN_ID_DISCOVERY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

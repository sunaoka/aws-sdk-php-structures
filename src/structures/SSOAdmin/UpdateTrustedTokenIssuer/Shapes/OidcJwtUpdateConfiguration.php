<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateTrustedTokenIssuer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClaimAttributePath
 * @property string|null $IdentityStoreAttributePath
 * @property 'OPEN_ID_DISCOVERY'|null $JwksRetrievalOption
 */
class OidcJwtUpdateConfiguration extends Shape
{
    /**
     * @param array{
     *     ClaimAttributePath?: string|null,
     *     IdentityStoreAttributePath?: string|null,
     *     JwksRetrievalOption?: 'OPEN_ID_DISCOVERY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

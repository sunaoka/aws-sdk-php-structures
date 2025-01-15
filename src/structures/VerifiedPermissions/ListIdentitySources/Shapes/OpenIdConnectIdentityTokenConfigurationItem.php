<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $principalIdClaim
 * @property list<string>|null $clientIds
 */
class OpenIdConnectIdentityTokenConfigurationItem extends Shape
{
    /**
     * @param array{
     *     principalIdClaim?: string|null,
     *     clientIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

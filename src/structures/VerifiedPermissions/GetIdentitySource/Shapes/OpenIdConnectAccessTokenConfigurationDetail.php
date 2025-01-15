<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $principalIdClaim
 * @property list<string>|null $audiences
 */
class OpenIdConnectAccessTokenConfigurationDetail extends Shape
{
    /**
     * @param array{
     *     principalIdClaim?: string|null,
     *     audiences?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

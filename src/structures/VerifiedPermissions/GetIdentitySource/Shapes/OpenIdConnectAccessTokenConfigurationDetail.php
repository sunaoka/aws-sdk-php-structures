<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $principalIdClaim
 * @property list<string> $audiences
 */
class OpenIdConnectAccessTokenConfigurationDetail extends Shape
{
    /**
     * @param array{
     *     principalIdClaim?: string,
     *     audiences?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

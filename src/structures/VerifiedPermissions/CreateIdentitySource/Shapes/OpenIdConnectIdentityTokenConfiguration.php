<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $principalIdClaim
 * @property list<string> $clientIds
 */
class OpenIdConnectIdentityTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     principalIdClaim?: string,
     *     clientIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $principalIdClaim
 * @property list<string> $clientIds
 */
class UpdateOpenIdConnectIdentityTokenConfiguration extends Shape
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

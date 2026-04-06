<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupClaim
 * @property string $groupEntityType
 */
class OpenIdConnectGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     groupClaim: string,
     *     groupEntityType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupClaim
 * @property string $groupEntityType
 */
class UpdateOpenIdConnectGroupConfiguration extends Shape
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

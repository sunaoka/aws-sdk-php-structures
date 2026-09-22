<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateDomainForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentityCenterConfiguration|null $identityCenterConfiguration
 */
class IdentityProviderConfiguration extends Shape
{
    /**
     * @param array{identityCenterConfiguration?: IdentityCenterConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

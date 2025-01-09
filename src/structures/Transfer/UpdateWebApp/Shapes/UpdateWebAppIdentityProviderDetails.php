<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateWebAppIdentityCenterConfig $IdentityCenterConfig
 */
class UpdateWebAppIdentityProviderDetails extends Shape
{
    /**
     * @param array{IdentityCenterConfig?: UpdateWebAppIdentityCenterConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

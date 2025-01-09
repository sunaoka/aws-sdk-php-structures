<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentityCenterConfig $IdentityCenterConfig
 */
class WebAppIdentityProviderDetails extends Shape
{
    /**
     * @param array{IdentityCenterConfig?: IdentityCenterConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

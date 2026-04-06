<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentityCenterConfig|null $IdentityCenterConfig
 */
class WebAppIdentityProviderDetails extends Shape
{
    /**
     * @param array{IdentityCenterConfig?: IdentityCenterConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

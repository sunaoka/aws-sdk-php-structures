<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescribedIdentityCenterConfig|null $IdentityCenterConfig
 */
class DescribedWebAppIdentityProviderDetails extends Shape
{
    /**
     * @param array{IdentityCenterConfig?: DescribedIdentityCenterConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

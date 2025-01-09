<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescribedIdentityCenterConfig $IdentityCenterConfig
 */
class DescribedWebAppIdentityProviderDetails extends Shape
{
    /**
     * @param array{IdentityCenterConfig?: DescribedIdentityCenterConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

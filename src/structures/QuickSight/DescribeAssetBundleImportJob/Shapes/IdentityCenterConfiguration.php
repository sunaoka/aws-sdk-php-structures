<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableIdentityPropagation
 */
class IdentityCenterConfiguration extends Shape
{
    /**
     * @param array{EnableIdentityPropagation?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

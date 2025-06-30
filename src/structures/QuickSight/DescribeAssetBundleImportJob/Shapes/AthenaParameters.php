<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkGroup
 * @property string|null $RoleArn
 * @property IdentityCenterConfiguration|null $IdentityCenterConfiguration
 */
class AthenaParameters extends Shape
{
    /**
     * @param array{
     *     WorkGroup?: string|null,
     *     RoleArn?: string|null,
     *     IdentityCenterConfiguration?: IdentityCenterConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

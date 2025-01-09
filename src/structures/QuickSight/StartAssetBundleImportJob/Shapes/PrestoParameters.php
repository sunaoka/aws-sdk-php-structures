<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int<1, 65535> $Port
 * @property string $Catalog
 */
class PrestoParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int<1, 65535>,
     *     Catalog: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

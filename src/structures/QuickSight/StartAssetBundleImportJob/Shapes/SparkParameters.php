<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int $Port
 */
class SparkParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

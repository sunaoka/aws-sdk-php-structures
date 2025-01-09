<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int<1, 65535> $Port
 * @property string $SqlEndpointPath
 */
class DatabricksParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int<1, 65535>,
     *     SqlEndpointPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

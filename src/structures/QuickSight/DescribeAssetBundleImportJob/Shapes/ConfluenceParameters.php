<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfluenceUrl
 */
class ConfluenceParameters extends Shape
{
    /**
     * @param array{ConfluenceUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

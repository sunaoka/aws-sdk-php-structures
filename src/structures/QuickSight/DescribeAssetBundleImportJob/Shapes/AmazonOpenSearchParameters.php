<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 */
class AmazonOpenSearchParameters extends Shape
{
    /**
     * @param array{Domain: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DisableSsl
 */
class SslProperties extends Shape
{
    /**
     * @param array{DisableSsl?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

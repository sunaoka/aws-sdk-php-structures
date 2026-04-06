<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $VendingEnabled
 */
class PackageVendingOptions extends Shape
{
    /**
     * @param array{VendingEnabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

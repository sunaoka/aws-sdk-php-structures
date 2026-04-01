<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UrlRedirectionConfig|null $HostToClient
 */
class ContentRedirection extends Shape
{
    /**
     * @param array{HostToClient?: UrlRedirectionConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

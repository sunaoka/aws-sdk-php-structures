<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $url
 */
class ImageLocation extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

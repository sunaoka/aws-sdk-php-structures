<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 * @property 'PNG' $type
 */
class ImageFile extends Shape
{
    /**
     * @param array{
     *     data: string|resource|\Psr\Http\Message\StreamInterface,
     *     type: 'PNG'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

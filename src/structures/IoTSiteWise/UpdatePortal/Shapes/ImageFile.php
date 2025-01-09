<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $data
 * @property 'PNG' $type
 */
class ImageFile extends Shape
{
    /**
     * @param array{
     *     data: string,
     *     type: 'PNG'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

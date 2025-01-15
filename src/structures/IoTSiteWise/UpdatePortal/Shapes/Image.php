<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property ImageFile|null $file
 */
class Image extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     file?: ImageFile|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property ImageFile $file
 */
class Image extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     file?: ImageFile
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

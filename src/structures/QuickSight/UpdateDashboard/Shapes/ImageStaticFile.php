<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StaticFileId
 * @property StaticFileSource|null $Source
 */
class ImageStaticFile extends Shape
{
    /**
     * @param array{
     *     StaticFileId: string,
     *     Source?: StaticFileSource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAccessPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 */
class PortalResource extends Shape
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

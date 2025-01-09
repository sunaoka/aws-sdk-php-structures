<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListDeviceResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $resourceType
 */
class ResourceSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     id?: string,
     *     resourceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $datastoreName
 */
class DatastoreActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     datastoreName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

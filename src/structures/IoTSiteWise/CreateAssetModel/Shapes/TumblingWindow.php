<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $interval
 * @property string $offset
 */
class TumblingWindow extends Shape
{
    /**
     * @param array{
     *     interval: string,
     *     offset?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

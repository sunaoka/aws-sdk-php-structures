<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $interval
 * @property string|null $offset
 */
class TumblingWindow extends Shape
{
    /**
     * @param array{
     *     interval: string,
     *     offset?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

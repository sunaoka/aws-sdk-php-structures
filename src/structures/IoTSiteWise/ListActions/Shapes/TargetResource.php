<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $assetId
 * @property string|null $computationModelId
 */
class TargetResource extends Shape
{
    /**
     * @param array{
     *     assetId?: string|null,
     *     computationModelId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

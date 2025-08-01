<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $functionName
 * @property string $resourceId
 * @property string $layerArn
 * @property string $accountId
 * @property SeverityCounts|null $severityCounts
 */
class LambdaLayerAggregationResponse extends Shape
{
    /**
     * @param array{
     *     functionName: string,
     *     resourceId: string,
     *     layerArn: string,
     *     accountId: string,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $functionName
 * @property string $layerArn
 * @property string $resourceId
 * @property SeverityCounts|null $severityCounts
 */
class LambdaLayerAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     functionName: string,
     *     layerArn: string,
     *     resourceId: string,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProductViewSummary $ProductViewSummary
 * @property 'AVAILABLE'|'CREATING'|'FAILED' $Status
 * @property string $ProductARN
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property SourceConnectionDetail $SourceConnection
 */
class ProductViewDetail extends Shape
{
    /**
     * @param array{
     *     ProductViewSummary?: ProductViewSummary,
     *     Status?: 'AVAILABLE'|'CREATING'|'FAILED',
     *     ProductARN?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     SourceConnection?: SourceConnectionDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

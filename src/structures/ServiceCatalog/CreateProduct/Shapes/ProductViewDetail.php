<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProductViewSummary|null $ProductViewSummary
 * @property 'AVAILABLE'|'CREATING'|'FAILED'|null $Status
 * @property string|null $ProductARN
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property SourceConnectionDetail|null $SourceConnection
 */
class ProductViewDetail extends Shape
{
    /**
     * @param array{
     *     ProductViewSummary?: ProductViewSummary|null,
     *     Status?: 'AVAILABLE'|'CREATING'|'FAILED'|null,
     *     ProductARN?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     SourceConnection?: SourceConnectionDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

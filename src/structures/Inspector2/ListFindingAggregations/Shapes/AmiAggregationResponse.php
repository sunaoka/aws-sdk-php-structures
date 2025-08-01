<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ami
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 * @property int|null $affectedInstances
 */
class AmiAggregationResponse extends Shape
{
    /**
     * @param array{
     *     ami: string,
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     affectedInstances?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

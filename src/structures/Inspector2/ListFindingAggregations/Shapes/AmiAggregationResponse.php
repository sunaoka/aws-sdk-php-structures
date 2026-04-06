<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property int|null $affectedInstances
 * @property string $ami
 * @property SeverityCounts|null $severityCounts
 */
class AmiAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     affectedInstances?: int|null,
     *     ami: string,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

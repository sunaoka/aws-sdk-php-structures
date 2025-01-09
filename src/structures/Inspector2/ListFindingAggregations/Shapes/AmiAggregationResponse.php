<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property int $affectedInstances
 * @property string $ami
 * @property SeverityCounts $severityCounts
 */
class AmiAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     affectedInstances?: int,
     *     ami: string,
     *     severityCounts?: SeverityCounts
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

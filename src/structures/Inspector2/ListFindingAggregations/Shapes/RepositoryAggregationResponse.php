<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property int $affectedImages
 * @property string $repository
 * @property SeverityCounts $severityCounts
 */
class RepositoryAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     affectedImages?: int,
     *     repository: string,
     *     severityCounts?: SeverityCounts
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

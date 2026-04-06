<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repository
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 * @property int|null $affectedImages
 */
class RepositoryAggregationResponse extends Shape
{
    /**
     * @param array{
     *     repository: string,
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     affectedImages?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

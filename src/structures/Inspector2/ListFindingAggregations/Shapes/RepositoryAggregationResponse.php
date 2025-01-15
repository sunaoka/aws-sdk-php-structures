<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property int|null $affectedImages
 * @property string $repository
 * @property SeverityCounts|null $severityCounts
 */
class RepositoryAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     affectedImages?: int|null,
     *     repository: string,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

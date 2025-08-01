<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $packageName
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 */
class PackageAggregationResponse extends Shape
{
    /**
     * @param array{
     *     packageName: string,
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

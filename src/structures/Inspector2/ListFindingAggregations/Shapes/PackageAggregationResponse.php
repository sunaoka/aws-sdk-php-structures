<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $packageName
 * @property SeverityCounts $severityCounts
 */
class PackageAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     packageName: string,
     *     severityCounts?: SeverityCounts
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

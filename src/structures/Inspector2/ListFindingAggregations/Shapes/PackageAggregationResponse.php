<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string $packageName
 * @property SeverityCounts|null $severityCounts
 */
class PackageAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     packageName: string,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

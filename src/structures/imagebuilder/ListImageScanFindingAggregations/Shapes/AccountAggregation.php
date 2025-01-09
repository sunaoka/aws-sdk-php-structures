<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property SeverityCounts $severityCounts
 */
class AccountAggregation extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     severityCounts?: SeverityCounts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

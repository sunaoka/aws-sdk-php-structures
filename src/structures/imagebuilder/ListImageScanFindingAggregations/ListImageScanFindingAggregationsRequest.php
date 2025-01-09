<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Filter $filter
 * @property string $nextToken
 */
class ListImageScanFindingAggregationsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\Filter,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Filter|null $filter
 * @property string|null $nextToken
 */
class ListImageScanFindingAggregationsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\Filter|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property Shapes\TransformFilterCriteria|null $Filter
 * @property Shapes\TransformSortCriteria|null $Sort
 */
class GetMLTransformsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     Filter?: Shapes\TransformFilterCriteria|null,
     *     Sort?: Shapes\TransformSortCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

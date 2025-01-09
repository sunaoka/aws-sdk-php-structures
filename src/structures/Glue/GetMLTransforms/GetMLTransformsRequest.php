<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\TransformFilterCriteria $Filter
 * @property Shapes\TransformSortCriteria $Sort
 */
class GetMLTransformsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filter?: Shapes\TransformFilterCriteria,
     *     Sort?: Shapes\TransformSortCriteria
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

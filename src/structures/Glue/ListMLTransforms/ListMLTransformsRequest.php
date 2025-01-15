<?php

namespace Sunaoka\Aws\Structures\Glue\ListMLTransforms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property Shapes\TransformFilterCriteria|null $Filter
 * @property Shapes\TransformSortCriteria|null $Sort
 * @property array<string, string>|null $Tags
 */
class ListMLTransformsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     Filter?: Shapes\TransformFilterCriteria|null,
     *     Sort?: Shapes\TransformSortCriteria|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\ListMLTransforms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property Shapes\TransformFilterCriteria $Filter
 * @property Shapes\TransformSortCriteria $Sort
 * @property array<string, string> $Tags
 */
class ListMLTransformsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     Filter?: Shapes\TransformFilterCriteria,
     *     Sort?: Shapes\TransformSortCriteria,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

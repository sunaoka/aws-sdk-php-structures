<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLFTagExpressions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListLFTagExpressionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

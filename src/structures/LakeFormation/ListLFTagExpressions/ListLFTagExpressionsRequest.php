<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLFTagExpressions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListLFTagExpressionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

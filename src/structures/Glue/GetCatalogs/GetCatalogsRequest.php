<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParentCatalogId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property bool $Recursive
 * @property bool $IncludeRoot
 */
class GetCatalogsRequest extends Request
{
    /**
     * @param array{
     *     ParentCatalogId?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     Recursive?: bool,
     *     IncludeRoot?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

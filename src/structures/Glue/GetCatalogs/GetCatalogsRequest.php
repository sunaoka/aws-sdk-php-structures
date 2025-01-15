<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ParentCatalogId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property bool|null $Recursive
 * @property bool|null $IncludeRoot
 */
class GetCatalogsRequest extends Request
{
    /**
     * @param array{
     *     ParentCatalogId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     Recursive?: bool|null,
     *     IncludeRoot?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

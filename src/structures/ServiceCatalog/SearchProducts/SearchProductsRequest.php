<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property array<'FullTextSearch'|'Owner'|'ProductType'|'SourceProductId', list<string>>|null $Filters
 * @property int<0, 100>|null $PageSize
 * @property 'Title'|'VersionCount'|'CreationDate'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property string|null $PageToken
 */
class SearchProductsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     Filters?: array<'FullTextSearch'|'Owner'|'ProductType'|'SourceProductId', list<string>>|null,
     *     PageSize?: int<0, 100>|null,
     *     SortBy?: 'Title'|'VersionCount'|'CreationDate'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

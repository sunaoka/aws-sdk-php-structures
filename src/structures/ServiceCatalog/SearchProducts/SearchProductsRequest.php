<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property array<'FullTextSearch'|'Owner'|'ProductType'|'SourceProductId', list<string>> $Filters
 * @property int $PageSize
 * @property 'Title'|'VersionCount'|'CreationDate' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property string $PageToken
 */
class SearchProductsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     Filters?: array<'FullTextSearch'|'Owner'|'ProductType'|'SourceProductId', list<string>>,
     *     PageSize?: int,
     *     SortBy?: 'Title'|'VersionCount'|'CreationDate',
     *     SortOrder?: 'ASCENDING'|'DESCENDING',
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

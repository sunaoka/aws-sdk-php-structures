<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProductsAsAdmin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PortfolioId
 * @property array<'FullTextSearch'|'Owner'|'ProductType'|'SourceProductId', list<string>> $Filters
 * @property 'Title'|'VersionCount'|'CreationDate' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property string $PageToken
 * @property int $PageSize
 * @property 'ACCOUNT' $ProductSource
 */
class SearchProductsAsAdminRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PortfolioId?: string,
     *     Filters?: array<'FullTextSearch'|'Owner'|'ProductType'|'SourceProductId', list<string>>,
     *     SortBy?: 'Title'|'VersionCount'|'CreationDate',
     *     SortOrder?: 'ASCENDING'|'DESCENDING',
     *     PageToken?: string,
     *     PageSize?: int,
     *     ProductSource?: 'ACCOUNT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProductsAsAdmin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $PortfolioId
 * @property array<'FullTextSearch'|'Owner'|'ProductType'|'SourceProductId', list<string>>|null $Filters
 * @property 'Title'|'VersionCount'|'CreationDate'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property string|null $PageToken
 * @property int<0, 20>|null $PageSize
 * @property 'ACCOUNT'|null $ProductSource
 */
class SearchProductsAsAdminRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PortfolioId?: string|null,
     *     Filters?: array<'FullTextSearch'|'Owner'|'ProductType'|'SourceProductId', list<string>>|null,
     *     SortBy?: 'Title'|'VersionCount'|'CreationDate'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     PageToken?: string|null,
     *     PageSize?: int<0, 20>|null,
     *     ProductSource?: 'ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

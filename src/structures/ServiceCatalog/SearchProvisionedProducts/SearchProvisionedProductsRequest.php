<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProvisionedProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property Shapes\AccessLevelFilter $AccessLevelFilter
 * @property array<'SearchQuery', list<string>> $Filters
 * @property string $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property int $PageSize
 * @property string $PageToken
 */
class SearchProvisionedProductsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     AccessLevelFilter?: Shapes\AccessLevelFilter,
     *     Filters?: array<'SearchQuery', list<string>>,
     *     SortBy?: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING',
     *     PageSize?: int,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

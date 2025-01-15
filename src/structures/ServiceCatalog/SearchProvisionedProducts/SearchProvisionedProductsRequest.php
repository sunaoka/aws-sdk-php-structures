<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProvisionedProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property Shapes\AccessLevelFilter|null $AccessLevelFilter
 * @property array<'SearchQuery', list<string>>|null $Filters
 * @property string|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property int<0, 100>|null $PageSize
 * @property string|null $PageToken
 */
class SearchProvisionedProductsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     AccessLevelFilter?: Shapes\AccessLevelFilter|null,
     *     Filters?: array<'SearchQuery', list<string>>|null,
     *     SortBy?: string|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     PageSize?: int<0, 100>|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

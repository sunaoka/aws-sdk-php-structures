<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string|null $QueryText
 * @property list<'NAME'|'CONTENT'>|null $QueryScopes
 * @property string|null $OrganizationId
 * @property list<'WEBURL'>|null $AdditionalResponseFields
 * @property Shapes\Filters|null $Filters
 * @property list<Shapes\SearchSortResult>|null $OrderBy
 * @property int<1, 100>|null $Limit
 * @property string|null $Marker
 */
class SearchResourcesRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     QueryText?: string|null,
     *     QueryScopes?: list<'NAME'|'CONTENT'>|null,
     *     OrganizationId?: string|null,
     *     AdditionalResponseFields?: list<'WEBURL'>|null,
     *     Filters?: Shapes\Filters|null,
     *     OrderBy?: list<Shapes\SearchSortResult>|null,
     *     Limit?: int<1, 100>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

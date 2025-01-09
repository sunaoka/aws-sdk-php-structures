<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $QueryText
 * @property list<'NAME'|'CONTENT'> $QueryScopes
 * @property string $OrganizationId
 * @property list<'WEBURL'> $AdditionalResponseFields
 * @property Shapes\Filters $Filters
 * @property list<Shapes\SearchSortResult> $OrderBy
 * @property int $Limit
 * @property string $Marker
 */
class SearchResourcesRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     QueryText?: string,
     *     QueryScopes?: list<'NAME'|'CONTENT'>,
     *     OrganizationId?: string,
     *     AdditionalResponseFields?: list<'WEBURL'>,
     *     Filters?: Shapes\Filters,
     *     OrderBy?: list<Shapes\SearchSortResult>,
     *     Limit?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

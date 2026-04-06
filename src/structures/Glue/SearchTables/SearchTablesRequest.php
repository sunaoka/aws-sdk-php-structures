<?php

namespace Sunaoka\Aws\Structures\Glue\SearchTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string|null $NextToken
 * @property list<Shapes\PropertyPredicate>|null $Filters
 * @property string|null $SearchText
 * @property list<Shapes\SortCriterion>|null $SortCriteria
 * @property int<1, 1000>|null $MaxResults
 * @property 'FOREIGN'|'ALL'|'FEDERATED'|null $ResourceShareType
 * @property bool|null $IncludeStatusDetails
 */
class SearchTablesRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\PropertyPredicate>|null,
     *     SearchText?: string|null,
     *     SortCriteria?: list<Shapes\SortCriterion>|null,
     *     MaxResults?: int<1, 1000>|null,
     *     ResourceShareType?: 'FOREIGN'|'ALL'|'FEDERATED'|null,
     *     IncludeStatusDetails?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

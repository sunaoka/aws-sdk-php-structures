<?php

namespace Sunaoka\Aws\Structures\Glue\SearchTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $NextToken
 * @property list<Shapes\PropertyPredicate> $Filters
 * @property string $SearchText
 * @property list<Shapes\SortCriterion> $SortCriteria
 * @property int $MaxResults
 * @property 'FOREIGN'|'ALL'|'FEDERATED' $ResourceShareType
 * @property bool $IncludeStatusDetails
 */
class SearchTablesRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     NextToken?: string,
     *     Filters?: list<Shapes\PropertyPredicate>,
     *     SearchText?: string,
     *     SortCriteria?: list<Shapes\SortCriterion>,
     *     MaxResults?: int,
     *     ResourceShareType?: 'FOREIGN'|'ALL'|'FEDERATED',
     *     IncludeStatusDetails?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

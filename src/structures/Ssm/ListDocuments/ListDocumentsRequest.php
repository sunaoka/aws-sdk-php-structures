<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DocumentFilter>|null $DocumentFilterList
 * @property list<Shapes\DocumentKeyValuesFilter>|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDocumentsRequest extends Request
{
    /**
     * @param array{
     *     DocumentFilterList?: list<Shapes\DocumentFilter>|null,
     *     Filters?: list<Shapes\DocumentKeyValuesFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

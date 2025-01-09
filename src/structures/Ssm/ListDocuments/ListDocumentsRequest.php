<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DocumentFilter> $DocumentFilterList
 * @property list<Shapes\DocumentKeyValuesFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListDocumentsRequest extends Request
{
    /**
     * @param array{
     *     DocumentFilterList?: list<Shapes\DocumentFilter>,
     *     Filters?: list<Shapes\DocumentKeyValuesFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

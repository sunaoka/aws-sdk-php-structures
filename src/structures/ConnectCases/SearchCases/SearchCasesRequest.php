<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property list<Shapes\FieldIdentifier> $fields
 * @property Shapes\CaseFilter $filter
 * @property int $maxResults
 * @property string $nextToken
 * @property string $searchTerm
 * @property list<Shapes\Sort> $sorts
 */
class SearchCasesRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     fields?: list<Shapes\FieldIdentifier>,
     *     filter?: Shapes\CaseFilter,
     *     maxResults?: int,
     *     nextToken?: string,
     *     searchTerm?: string,
     *     sorts?: list<Shapes\Sort>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

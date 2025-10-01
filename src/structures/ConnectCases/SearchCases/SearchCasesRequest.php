<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $searchTerm
 * @property Shapes\CaseFilter|null $filter
 * @property list<Shapes\Sort>|null $sorts
 * @property list<Shapes\FieldIdentifier>|null $fields
 */
class SearchCasesRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     searchTerm?: string|null,
     *     filter?: Shapes\CaseFilter|null,
     *     sorts?: list<Shapes\Sort>|null,
     *     fields?: list<Shapes\FieldIdentifier>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

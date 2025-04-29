<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property list<Shapes\FieldIdentifier>|null $fields
 * @property Shapes\CaseFilter|null $filter
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $searchTerm
 * @property list<Shapes\Sort>|null $sorts
 */
class SearchCasesRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     fields?: list<Shapes\FieldIdentifier>|null,
     *     filter?: Shapes\CaseFilter|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     searchTerm?: string|null,
     *     sorts?: list<Shapes\Sort>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

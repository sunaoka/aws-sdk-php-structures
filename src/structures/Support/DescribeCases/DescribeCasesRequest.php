<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $caseIdList
 * @property string|null $displayId
 * @property string|null $afterTime
 * @property string|null $beforeTime
 * @property bool|null $includeResolvedCases
 * @property string|null $nextToken
 * @property int<10, 100>|null $maxResults
 * @property string|null $language
 * @property bool|null $includeCommunications
 */
class DescribeCasesRequest extends Request
{
    /**
     * @param array{
     *     caseIdList?: list<string>|null,
     *     displayId?: string|null,
     *     afterTime?: string|null,
     *     beforeTime?: string|null,
     *     includeResolvedCases?: bool|null,
     *     nextToken?: string|null,
     *     maxResults?: int<10, 100>|null,
     *     language?: string|null,
     *     includeCommunications?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

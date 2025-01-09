<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $caseIdList
 * @property string $displayId
 * @property string $afterTime
 * @property string $beforeTime
 * @property bool $includeResolvedCases
 * @property string $nextToken
 * @property int<10, 100> $maxResults
 * @property string $language
 * @property bool $includeCommunications
 */
class DescribeCasesRequest extends Request
{
    /**
     * @param array{
     *     caseIdList?: list<string>,
     *     displayId?: string,
     *     afterTime?: string,
     *     beforeTime?: string,
     *     includeResolvedCases?: bool,
     *     nextToken?: string,
     *     maxResults?: int<10, 100>,
     *     language?: string,
     *     includeCommunications?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

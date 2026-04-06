<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $testCaseIds
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListTestCasesRequest extends Request
{
    /**
     * @param array{
     *     testCaseIds?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $testCaseIds
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListTestCasesRequest extends Request
{
    /**
     * @param array{
     *     testCaseIds?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

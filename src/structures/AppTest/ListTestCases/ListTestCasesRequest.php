<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $testCaseIds
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTestCasesRequest extends Request
{
    /**
     * @param array{
     *     testCaseIds?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

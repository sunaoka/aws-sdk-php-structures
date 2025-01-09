<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSuiteId
 * @property list<string> $testRunIds
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListTestRunsRequest extends Request
{
    /**
     * @param array{
     *     testSuiteId?: string,
     *     testRunIds?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

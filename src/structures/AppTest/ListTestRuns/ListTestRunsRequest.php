<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSuiteId
 * @property list<string> $testRunIds
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTestRunsRequest extends Request
{
    /**
     * @param array{
     *     testSuiteId?: string,
     *     testRunIds?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

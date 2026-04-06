<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $testSuiteId
 * @property list<string>|null $testRunIds
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListTestRunsRequest extends Request
{
    /**
     * @param array{
     *     testSuiteId?: string|null,
     *     testRunIds?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

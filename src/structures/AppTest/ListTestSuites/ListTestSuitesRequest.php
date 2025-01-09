<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestSuites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $testSuiteIds
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTestSuitesRequest extends Request
{
    /**
     * @param array{
     *     testSuiteIds?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

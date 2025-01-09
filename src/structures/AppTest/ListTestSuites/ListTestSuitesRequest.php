<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestSuites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $testSuiteIds
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListTestSuitesRequest extends Request
{
    /**
     * @param array{
     *     testSuiteIds?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestSuites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $testSuiteIds
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListTestSuitesRequest extends Request
{
    /**
     * @param array{
     *     testSuiteIds?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

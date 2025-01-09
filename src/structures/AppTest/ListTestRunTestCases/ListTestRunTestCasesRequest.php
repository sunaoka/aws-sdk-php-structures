<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRunTestCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListTestRunTestCasesRequest extends Request
{
    /**
     * @param array{
     *     testRunId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

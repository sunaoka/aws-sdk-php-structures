<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRunTestCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTestRunTestCasesRequest extends Request
{
    /**
     * @param array{
     *     testRunId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

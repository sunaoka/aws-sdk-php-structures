<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRunTestCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListTestRunTestCasesRequest extends Request
{
    /**
     * @param array{
     *     testRunId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

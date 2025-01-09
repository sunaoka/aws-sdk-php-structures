<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRunSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 * @property string $testCaseId
 * @property string $testSuiteId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListTestRunStepsRequest extends Request
{
    /**
     * @param array{
     *     testRunId: string,
     *     testCaseId?: string,
     *     testSuiteId?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

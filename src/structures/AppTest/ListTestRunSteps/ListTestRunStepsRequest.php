<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRunSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 * @property string|null $testCaseId
 * @property string|null $testSuiteId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListTestRunStepsRequest extends Request
{
    /**
     * @param array{
     *     testRunId: string,
     *     testCaseId?: string|null,
     *     testSuiteId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

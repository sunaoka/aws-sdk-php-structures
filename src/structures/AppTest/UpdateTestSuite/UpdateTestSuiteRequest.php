<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestSuite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSuiteId
 * @property string $description
 * @property list<Shapes\Step> $beforeSteps
 * @property list<Shapes\Step> $afterSteps
 * @property Shapes\TestCases $testCases
 */
class UpdateTestSuiteRequest extends Request
{
    /**
     * @param array{
     *     testSuiteId: string,
     *     description?: string,
     *     beforeSteps?: list<Shapes\Step>,
     *     afterSteps?: list<Shapes\Step>,
     *     testCases?: Shapes\TestCases
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

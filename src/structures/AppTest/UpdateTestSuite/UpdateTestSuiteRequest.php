<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestSuite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSuiteId
 * @property string|null $description
 * @property list<Shapes\Step>|null $beforeSteps
 * @property list<Shapes\Step>|null $afterSteps
 * @property Shapes\TestCases|null $testCases
 */
class UpdateTestSuiteRequest extends Request
{
    /**
     * @param array{
     *     testSuiteId: string,
     *     description?: string|null,
     *     beforeSteps?: list<Shapes\Step>|null,
     *     afterSteps?: list<Shapes\Step>|null,
     *     testCases?: Shapes\TestCases|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

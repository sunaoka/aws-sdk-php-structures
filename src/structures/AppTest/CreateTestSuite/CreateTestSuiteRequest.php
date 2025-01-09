<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\Step> $beforeSteps
 * @property list<Shapes\Step> $afterSteps
 * @property Shapes\TestCases $testCases
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateTestSuiteRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     beforeSteps?: list<Shapes\Step>,
     *     afterSteps?: list<Shapes\Step>,
     *     testCases: Shapes\TestCases,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

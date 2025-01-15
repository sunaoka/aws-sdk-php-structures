<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\Step>|null $beforeSteps
 * @property list<Shapes\Step>|null $afterSteps
 * @property Shapes\TestCases $testCases
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateTestSuiteRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     beforeSteps?: list<Shapes\Step>|null,
     *     afterSteps?: list<Shapes\Step>|null,
     *     testCases: Shapes\TestCases,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

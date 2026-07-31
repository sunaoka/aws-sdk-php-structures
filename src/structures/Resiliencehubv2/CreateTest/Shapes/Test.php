<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testId
 * @property string $testTemplateArn
 * @property string $serviceArn
 * @property string $name
 * @property list<TestAction>|null $actions
 * @property LoggingConfiguration|null $loggingConfiguration
 * @property list<StopCondition>|null $stopConditions
 * @property string|null $roleName
 * @property array<string, list<string>>|null $parameters
 * @property int $totalTestRuns
 * @property int $successfulTestRuns
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class Test extends Shape
{
    /**
     * @param array{
     *     testId: string,
     *     testTemplateArn: string,
     *     serviceArn: string,
     *     name: string,
     *     actions?: list<TestAction>|null,
     *     loggingConfiguration?: LoggingConfiguration|null,
     *     stopConditions?: list<StopCondition>|null,
     *     roleName?: string|null,
     *     parameters?: array<string, list<string>>|null,
     *     totalTestRuns: int,
     *     successfulTestRuns: int,
     *     creationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

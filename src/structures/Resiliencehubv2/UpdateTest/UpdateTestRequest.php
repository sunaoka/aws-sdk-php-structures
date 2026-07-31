<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testId
 * @property string $serviceArn
 * @property Shapes\LoggingConfiguration|null $loggingConfiguration
 * @property list<Shapes\StopCondition>|null $stopConditions
 * @property string|null $roleName
 * @property array<string, list<string>>|null $parameters
 */
class UpdateTestRequest extends Request
{
    /**
     * @param array{
     *     testId: string,
     *     serviceArn: string,
     *     loggingConfiguration?: Shapes\LoggingConfiguration|null,
     *     stopConditions?: list<Shapes\StopCondition>|null,
     *     roleName?: string|null,
     *     parameters?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

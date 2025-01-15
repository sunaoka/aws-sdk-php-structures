<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\StartCommandExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetArn
 * @property string $commandArn
 * @property array<string, Shapes\CommandParameterValue>|null $parameters
 * @property int<1, max>|null $executionTimeoutSeconds
 * @property string|null $clientToken
 */
class StartCommandExecutionRequest extends Request
{
    /**
     * @param array{
     *     targetArn: string,
     *     commandArn: string,
     *     parameters?: array<string, Shapes\CommandParameterValue>|null,
     *     executionTimeoutSeconds?: int<1, max>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

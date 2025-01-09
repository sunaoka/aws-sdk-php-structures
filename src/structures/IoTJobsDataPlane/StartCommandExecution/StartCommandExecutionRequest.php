<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\StartCommandExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetArn
 * @property string $commandArn
 * @property array<string, Shapes\CommandParameterValue> $parameters
 * @property int<1, max> $executionTimeoutSeconds
 * @property string $clientToken
 */
class StartCommandExecutionRequest extends Request
{
    /**
     * @param array{
     *     targetArn: string,
     *     commandArn: string,
     *     parameters?: array<string, Shapes\CommandParameterValue>,
     *     executionTimeoutSeconds?: int<1, max>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

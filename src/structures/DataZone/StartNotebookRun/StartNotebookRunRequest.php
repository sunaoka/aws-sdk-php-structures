<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $owningProjectIdentifier
 * @property string $notebookIdentifier
 * @property string|null $scheduleIdentifier
 * @property Shapes\ComputeConfig|null $computeConfiguration
 * @property Shapes\NetworkConfig|null $networkConfiguration
 * @property Shapes\TimeoutConfig|null $timeoutConfiguration
 * @property Shapes\TriggerSource|null $triggerSource
 * @property array<string, string>|null $metadata
 * @property array<string, string>|null $parameters
 * @property string|null $clientToken
 */
class StartNotebookRunRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     owningProjectIdentifier: string,
     *     notebookIdentifier: string,
     *     scheduleIdentifier?: string|null,
     *     computeConfiguration?: Shapes\ComputeConfig|null,
     *     networkConfiguration?: Shapes\NetworkConfig|null,
     *     timeoutConfiguration?: Shapes\TimeoutConfig|null,
     *     triggerSource?: Shapes\TriggerSource|null,
     *     metadata?: array<string, string>|null,
     *     parameters?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

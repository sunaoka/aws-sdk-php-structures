<?php

namespace Sunaoka\Aws\Structures\Glue\StartJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property bool $JobRunQueuingEnabled
 * @property string $JobRunId
 * @property array<string, string> $Arguments
 * @property int $AllocatedCapacity
 * @property int $Timeout
 * @property double $MaxCapacity
 * @property string $SecurityConfiguration
 * @property Shapes\NotificationProperty $NotificationProperty
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property int $NumberOfWorkers
 * @property 'FLEX'|'STANDARD' $ExecutionClass
 */
class StartJobRunRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     JobRunQueuingEnabled?: bool,
     *     JobRunId?: string,
     *     Arguments?: array<string, string>,
     *     AllocatedCapacity?: int,
     *     Timeout?: int,
     *     MaxCapacity?: double,
     *     SecurityConfiguration?: string,
     *     NotificationProperty?: Shapes\NotificationProperty,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X',
     *     NumberOfWorkers?: int,
     *     ExecutionClass?: 'FLEX'|'STANDARD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\StartJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property bool|null $JobRunQueuingEnabled
 * @property string|null $JobRunId
 * @property array<string, string>|null $Arguments
 * @property int|null $AllocatedCapacity
 * @property int<1, max>|null $Timeout
 * @property double|null $MaxCapacity
 * @property string|null $SecurityConfiguration
 * @property Shapes\NotificationProperty|null $NotificationProperty
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null $WorkerType
 * @property int|null $NumberOfWorkers
 * @property 'FLEX'|'STANDARD'|null $ExecutionClass
 * @property string|null $ExecutionRoleSessionPolicy
 */
class StartJobRunRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     JobRunQueuingEnabled?: bool|null,
     *     JobRunId?: string|null,
     *     Arguments?: array<string, string>|null,
     *     AllocatedCapacity?: int|null,
     *     Timeout?: int<1, max>|null,
     *     MaxCapacity?: double|null,
     *     SecurityConfiguration?: string|null,
     *     NotificationProperty?: Shapes\NotificationProperty|null,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null,
     *     NumberOfWorkers?: int|null,
     *     ExecutionClass?: 'FLEX'|'STANDARD'|null,
     *     ExecutionRoleSessionPolicy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

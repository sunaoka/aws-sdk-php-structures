<?php

namespace Sunaoka\Aws\Structures\Glue\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $CreatedOn
 * @property 'PROVISIONING'|'READY'|'FAILED'|'TIMEOUT'|'STOPPING'|'STOPPED' $Status
 * @property string $ErrorMessage
 * @property string $Description
 * @property string $Role
 * @property SessionCommand $Command
 * @property array<string, string> $DefaultArguments
 * @property ConnectionsList $Connections
 * @property double $Progress
 * @property double $MaxCapacity
 * @property string $SecurityConfiguration
 * @property string $GlueVersion
 * @property int $NumberOfWorkers
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property double $ExecutionTime
 * @property double $DPUSeconds
 * @property int $IdleTimeout
 * @property string $ProfileName
 */
class Session extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     CreatedOn?: \Aws\Api\DateTimeResult,
     *     Status?: 'PROVISIONING'|'READY'|'FAILED'|'TIMEOUT'|'STOPPING'|'STOPPED',
     *     ErrorMessage?: string,
     *     Description?: string,
     *     Role?: string,
     *     Command?: SessionCommand,
     *     DefaultArguments?: array<string, string>,
     *     Connections?: ConnectionsList,
     *     Progress?: double,
     *     MaxCapacity?: double,
     *     SecurityConfiguration?: string,
     *     GlueVersion?: string,
     *     NumberOfWorkers?: int,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X',
     *     CompletedOn?: \Aws\Api\DateTimeResult,
     *     ExecutionTime?: double,
     *     DPUSeconds?: double,
     *     IdleTimeout?: int,
     *     ProfileName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

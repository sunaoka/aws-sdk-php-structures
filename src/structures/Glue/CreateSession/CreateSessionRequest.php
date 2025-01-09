<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Description
 * @property string $Role
 * @property Shapes\SessionCommand $Command
 * @property int<1, max> $Timeout
 * @property int<1, max> $IdleTimeout
 * @property array<string, string> $DefaultArguments
 * @property Shapes\ConnectionsList $Connections
 * @property double $MaxCapacity
 * @property int $NumberOfWorkers
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property string $SecurityConfiguration
 * @property string $GlueVersion
 * @property array<string, string> $Tags
 * @property string $RequestOrigin
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Description?: string,
     *     Role: string,
     *     Command: Shapes\SessionCommand,
     *     Timeout?: int<1, max>,
     *     IdleTimeout?: int<1, max>,
     *     DefaultArguments?: array<string, string>,
     *     Connections?: Shapes\ConnectionsList,
     *     MaxCapacity?: double,
     *     NumberOfWorkers?: int,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X',
     *     SecurityConfiguration?: string,
     *     GlueVersion?: string,
     *     Tags?: array<string, string>,
     *     RequestOrigin?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Description
 * @property string $Role
 * @property Shapes\SessionCommand $Command
 * @property int<1, max>|null $Timeout
 * @property int<1, max>|null $IdleTimeout
 * @property array<string, string>|null $DefaultArguments
 * @property Shapes\ConnectionsList|null $Connections
 * @property double|null $MaxCapacity
 * @property int|null $NumberOfWorkers
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null $WorkerType
 * @property string|null $SecurityConfiguration
 * @property string|null $GlueVersion
 * @property array<string, string>|null $Tags
 * @property string|null $RequestOrigin
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Description?: string|null,
     *     Role: string,
     *     Command: Shapes\SessionCommand,
     *     Timeout?: int<1, max>|null,
     *     IdleTimeout?: int<1, max>|null,
     *     DefaultArguments?: array<string, string>|null,
     *     Connections?: Shapes\ConnectionsList|null,
     *     MaxCapacity?: double|null,
     *     NumberOfWorkers?: int|null,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null,
     *     SecurityConfiguration?: string|null,
     *     GlueVersion?: string|null,
     *     Tags?: array<string, string>|null,
     *     RequestOrigin?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

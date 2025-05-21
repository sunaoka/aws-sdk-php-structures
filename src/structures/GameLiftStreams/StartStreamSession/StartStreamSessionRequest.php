<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\StartStreamSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $AdditionalEnvironmentVariables
 * @property list<string>|null $AdditionalLaunchArgs
 * @property string $ApplicationIdentifier
 * @property string|null $ClientToken
 * @property int<1, 3600>|null $ConnectionTimeoutSeconds
 * @property string|null $Description
 * @property string $Identifier
 * @property list<string>|null $Locations
 * @property 'WebRTC' $Protocol
 * @property int<1, 86400>|null $SessionLengthSeconds
 * @property string $SignalRequest
 * @property string|null $UserId
 */
class StartStreamSessionRequest extends Request
{
    /**
     * @param array{
     *     AdditionalEnvironmentVariables?: array<string, string>|null,
     *     AdditionalLaunchArgs?: list<string>|null,
     *     ApplicationIdentifier: string,
     *     ClientToken?: string|null,
     *     ConnectionTimeoutSeconds?: int<1, 3600>|null,
     *     Description?: string|null,
     *     Identifier: string,
     *     Locations?: list<string>|null,
     *     Protocol: 'WebRTC',
     *     SessionLengthSeconds?: int<1, 86400>|null,
     *     SignalRequest: string,
     *     UserId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

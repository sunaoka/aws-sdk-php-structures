<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\StartStreamSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property string $Identifier
 * @property 'WebRTC' $Protocol
 * @property string $SignalRequest
 * @property string $ApplicationIdentifier
 * @property string|null $UserId
 * @property list<string>|null $Locations
 * @property int<1, 3600>|null $ConnectionTimeoutSeconds
 * @property int<1, 86400>|null $SessionLengthSeconds
 * @property list<string>|null $AdditionalLaunchArgs
 * @property array<string, string>|null $AdditionalEnvironmentVariables
 * @property Shapes\PerformanceStatsConfiguration|null $PerformanceStatsConfiguration
 */
class StartStreamSessionRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     Identifier: string,
     *     Protocol: 'WebRTC',
     *     SignalRequest: string,
     *     ApplicationIdentifier: string,
     *     UserId?: string|null,
     *     Locations?: list<string>|null,
     *     ConnectionTimeoutSeconds?: int<1, 3600>|null,
     *     SessionLengthSeconds?: int<1, 86400>|null,
     *     AdditionalLaunchArgs?: list<string>|null,
     *     AdditionalEnvironmentVariables?: array<string, string>|null,
     *     PerformanceStatsConfiguration?: Shapes\PerformanceStatsConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

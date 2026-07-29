<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateStreamUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $ApplicationIdentifier
 * @property 'WebRTC' $Protocol
 * @property int<1, max> $UrlExpiresAfterMinutes
 * @property int<1, max>|null $UsageLimit
 * @property string|null $Description
 * @property list<string> $Locations
 * @property int<1, 86400>|null $SessionLengthSeconds
 * @property list<string>|null $AdditionalLaunchArgs
 * @property array<string, string>|null $AdditionalEnvironmentVariables
 * @property string|null $RoleArn
 * @property Shapes\DisplayConfiguration|null $DisplayConfiguration
 * @property string|null $ClientToken
 */
class CreateStreamUrlRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     ApplicationIdentifier: string,
     *     Protocol: 'WebRTC',
     *     UrlExpiresAfterMinutes: int<1, max>,
     *     UsageLimit?: int<1, max>|null,
     *     Description?: string|null,
     *     Locations: list<string>,
     *     SessionLengthSeconds?: int<1, 86400>|null,
     *     AdditionalLaunchArgs?: list<string>|null,
     *     AdditionalEnvironmentVariables?: array<string, string>|null,
     *     RoleArn?: string|null,
     *     DisplayConfiguration?: Shapes\DisplayConfiguration|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

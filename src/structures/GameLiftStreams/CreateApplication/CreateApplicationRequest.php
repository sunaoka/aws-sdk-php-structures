<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property Shapes\RuntimeEnvironment $RuntimeEnvironment
 * @property string $ExecutablePath
 * @property string $ApplicationSourceUri
 * @property list<string>|null $ApplicationLogPaths
 * @property string|null $ApplicationLogOutputUri
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Description: string,
     *     RuntimeEnvironment: Shapes\RuntimeEnvironment,
     *     ExecutablePath: string,
     *     ApplicationSourceUri: string,
     *     ApplicationLogPaths?: list<string>|null,
     *     ApplicationLogOutputUri?: string|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

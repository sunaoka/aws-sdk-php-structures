<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationLogOutputUri
 * @property list<string>|null $ApplicationLogPaths
 * @property string $ApplicationSourceUri
 * @property string|null $ClientToken
 * @property string $Description
 * @property string $ExecutablePath
 * @property Shapes\RuntimeEnvironment $RuntimeEnvironment
 * @property array<string, string>|null $Tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationLogOutputUri?: string|null,
     *     ApplicationLogPaths?: list<string>|null,
     *     ApplicationSourceUri: string,
     *     ClientToken?: string|null,
     *     Description: string,
     *     ExecutablePath: string,
     *     RuntimeEnvironment: Shapes\RuntimeEnvironment,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $clientToken
 * @property string $executionRoleArn
 * @property Shapes\SessionConfigurationOverrides|null $configurationOverrides
 * @property array<string, string>|null $tags
 * @property int<0, 1000000>|null $idleTimeoutMinutes
 * @property string|null $name
 */
class StartSessionRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     clientToken: string,
     *     executionRoleArn: string,
     *     configurationOverrides?: Shapes\SessionConfigurationOverrides|null,
     *     tags?: array<string, string>|null,
     *     idleTimeoutMinutes?: int<0, 1000000>|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $Name
 * @property string|null $Description
 * @property list<Shapes\Monitor>|null $Monitors
 * @property array<string, string>|null $Tags
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Name: string,
     *     Description?: string|null,
     *     Monitors?: list<Shapes\Monitor>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

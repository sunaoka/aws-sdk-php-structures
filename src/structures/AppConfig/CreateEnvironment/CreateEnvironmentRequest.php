<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $Name
 * @property string $Description
 * @property list<Shapes\Monitor> $Monitors
 * @property array<string, string> $Tags
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Name: string,
     *     Description?: string,
     *     Monitors?: list<Shapes\Monitor>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $EnvironmentId
 * @property string $Name
 * @property string $Description
 * @property list<Shapes\Monitor> $Monitors
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EnvironmentId: string,
     *     Name?: string,
     *     Description?: string,
     *     Monitors?: list<Shapes\Monitor>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $EnvironmentId
 * @property string|null $Name
 * @property string|null $Description
 * @property list<Shapes\Monitor>|null $Monitors
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EnvironmentId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Monitors?: list<Shapes\Monitor>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

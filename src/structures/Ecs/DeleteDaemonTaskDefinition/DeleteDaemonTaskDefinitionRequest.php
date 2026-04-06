<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteDaemonTaskDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $daemonTaskDefinition
 */
class DeleteDaemonTaskDefinitionRequest extends Request
{
    /**
     * @param array{daemonTaskDefinition: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

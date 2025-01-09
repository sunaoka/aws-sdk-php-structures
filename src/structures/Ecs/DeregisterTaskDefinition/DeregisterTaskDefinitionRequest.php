<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskDefinition
 */
class DeregisterTaskDefinitionRequest extends Request
{
    /**
     * @param array{taskDefinition: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

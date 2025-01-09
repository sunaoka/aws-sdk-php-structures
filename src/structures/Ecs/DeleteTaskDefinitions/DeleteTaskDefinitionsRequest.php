<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $taskDefinitions
 */
class DeleteTaskDefinitionsRequest extends Request
{
    /**
     * @param array{taskDefinitions: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

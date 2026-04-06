<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteContainerGroupDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteContainerGroupDefinitionRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

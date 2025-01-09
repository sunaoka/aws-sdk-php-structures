<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteResourceDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceDefinitionId
 */
class DeleteResourceDefinitionRequest extends Request
{
    /**
     * @param array{ResourceDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

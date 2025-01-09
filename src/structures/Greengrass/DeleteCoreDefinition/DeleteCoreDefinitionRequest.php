<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteCoreDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreDefinitionId
 */
class DeleteCoreDefinitionRequest extends Request
{
    /**
     * @param array{CoreDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

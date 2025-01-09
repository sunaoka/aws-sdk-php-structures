<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteConnectorDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorDefinitionId
 */
class DeleteConnectorDefinitionRequest extends Request
{
    /**
     * @param array{ConnectorDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

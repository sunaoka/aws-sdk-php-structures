<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetConnectorDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorDefinitionId
 */
class GetConnectorDefinitionRequest extends Request
{
    /**
     * @param array{ConnectorDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateConnectorDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorDefinitionId
 * @property string $Name
 */
class UpdateConnectorDefinitionRequest extends Request
{
    /**
     * @param array{
     *     ConnectorDefinitionId: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

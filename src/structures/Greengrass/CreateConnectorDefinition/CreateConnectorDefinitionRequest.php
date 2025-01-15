<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateConnectorDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property Shapes\ConnectorDefinitionVersion|null $InitialVersion
 * @property string|null $Name
 * @property array<string, string>|null $tags
 */
class CreateConnectorDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     InitialVersion?: Shapes\ConnectorDefinitionVersion|null,
     *     Name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

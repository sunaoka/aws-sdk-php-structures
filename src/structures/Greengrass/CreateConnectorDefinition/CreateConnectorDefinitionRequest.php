<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateConnectorDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property Shapes\ConnectorDefinitionVersion $InitialVersion
 * @property string $Name
 * @property array<string, string> $tags
 */
class CreateConnectorDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     InitialVersion?: Shapes\ConnectorDefinitionVersion,
     *     Name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

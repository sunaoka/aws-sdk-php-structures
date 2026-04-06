<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\CreateConfigurationManager;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ConfigurationDefinitionInput> $ConfigurationDefinitions
 * @property string|null $Description
 * @property string|null $Name
 * @property array<string, string>|null $Tags
 */
class CreateConfigurationManagerRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationDefinitions: list<Shapes\ConfigurationDefinitionInput>,
     *     Description?: string|null,
     *     Name?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

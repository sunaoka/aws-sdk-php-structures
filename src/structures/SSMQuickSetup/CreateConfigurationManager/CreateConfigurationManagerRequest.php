<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\CreateConfigurationManager;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ConfigurationDefinitionInput> $ConfigurationDefinitions
 * @property string $Description
 * @property string $Name
 * @property array<string, string> $Tags
 */
class CreateConfigurationManagerRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationDefinitions: list<Shapes\ConfigurationDefinitionInput>,
     *     Description?: string,
     *     Name?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\CreateSuiteDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SuiteDefinitionConfiguration $suiteDefinitionConfiguration
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateSuiteDefinitionRequest extends Request
{
    /**
     * @param array{
     *     suiteDefinitionConfiguration: Shapes\SuiteDefinitionConfiguration,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

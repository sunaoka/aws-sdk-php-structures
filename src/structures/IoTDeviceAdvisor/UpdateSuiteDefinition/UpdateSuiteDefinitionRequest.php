<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\UpdateSuiteDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $suiteDefinitionId
 * @property Shapes\SuiteDefinitionConfiguration $suiteDefinitionConfiguration
 */
class UpdateSuiteDefinitionRequest extends Request
{
    /**
     * @param array{
     *     suiteDefinitionId: string,
     *     suiteDefinitionConfiguration: Shapes\SuiteDefinitionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

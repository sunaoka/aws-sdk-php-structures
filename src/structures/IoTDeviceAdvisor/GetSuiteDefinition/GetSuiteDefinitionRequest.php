<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $suiteDefinitionId
 * @property string $suiteDefinitionVersion
 */
class GetSuiteDefinitionRequest extends Request
{
    /**
     * @param array{
     *     suiteDefinitionId: string,
     *     suiteDefinitionVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

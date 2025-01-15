<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $suiteDefinitionId
 * @property string|null $suiteDefinitionVersion
 */
class GetSuiteDefinitionRequest extends Request
{
    /**
     * @param array{
     *     suiteDefinitionId: string,
     *     suiteDefinitionVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

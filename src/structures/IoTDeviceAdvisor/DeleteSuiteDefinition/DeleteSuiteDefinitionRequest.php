<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\DeleteSuiteDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $suiteDefinitionId
 */
class DeleteSuiteDefinitionRequest extends Request
{
    /**
     * @param array{suiteDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

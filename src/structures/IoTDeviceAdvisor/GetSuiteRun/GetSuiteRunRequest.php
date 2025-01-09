<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $suiteDefinitionId
 * @property string $suiteRunId
 */
class GetSuiteRunRequest extends Request
{
    /**
     * @param array{
     *     suiteDefinitionId: string,
     *     suiteRunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

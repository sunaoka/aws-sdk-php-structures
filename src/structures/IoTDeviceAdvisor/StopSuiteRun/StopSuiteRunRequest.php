<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\StopSuiteRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $suiteDefinitionId
 * @property string $suiteRunId
 */
class StopSuiteRunRequest extends Request
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

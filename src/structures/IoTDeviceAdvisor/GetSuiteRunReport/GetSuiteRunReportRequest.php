<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRunReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $suiteDefinitionId
 * @property string $suiteRunId
 */
class GetSuiteRunReportRequest extends Request
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

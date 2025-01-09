<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\ListSuiteRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $suiteDefinitionId
 * @property string $suiteDefinitionVersion
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class ListSuiteRunsRequest extends Request
{
    /**
     * @param array{
     *     suiteDefinitionId?: string,
     *     suiteDefinitionVersion?: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

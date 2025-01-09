<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\ListSuiteRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $suiteDefinitionId
 * @property string $suiteDefinitionVersion
 * @property int $maxResults
 * @property string $nextToken
 */
class ListSuiteRunsRequest extends Request
{
    /**
     * @param array{
     *     suiteDefinitionId?: string,
     *     suiteDefinitionVersion?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

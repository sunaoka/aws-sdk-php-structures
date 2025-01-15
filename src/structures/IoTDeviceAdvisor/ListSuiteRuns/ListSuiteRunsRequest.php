<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\ListSuiteRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $suiteDefinitionId
 * @property string|null $suiteDefinitionVersion
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListSuiteRunsRequest extends Request
{
    /**
     * @param array{
     *     suiteDefinitionId?: string|null,
     *     suiteDefinitionVersion?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

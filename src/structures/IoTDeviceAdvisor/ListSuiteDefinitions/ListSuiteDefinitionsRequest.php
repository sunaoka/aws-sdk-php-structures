<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\ListSuiteDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class ListSuiteDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeConfigurationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $service
 * @property list<string>|null $logTypes
 * @property list<string>|null $resourceTypes
 * @property list<'S3'|'CWL'|'FH'>|null $deliveryDestinationTypes
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 */
class DescribeConfigurationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     service?: string|null,
     *     logTypes?: list<string>|null,
     *     resourceTypes?: list<string>|null,
     *     deliveryDestinationTypes?: list<'S3'|'CWL'|'FH'>|null,
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeConfigurationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $service
 * @property list<string> $logTypes
 * @property list<string> $resourceTypes
 * @property list<'S3'|'CWL'|'FH'> $deliveryDestinationTypes
 * @property string $nextToken
 * @property int<1, 50> $limit
 */
class DescribeConfigurationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     service?: string,
     *     logTypes?: list<string>,
     *     resourceTypes?: list<string>,
     *     deliveryDestinationTypes?: list<'S3'|'CWL'|'FH'>,
     *     nextToken?: string,
     *     limit?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

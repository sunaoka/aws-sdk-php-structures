<?php

namespace Sunaoka\Aws\Structures\Kinesis\DisableEnhancedMonitoring;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property list<'IncomingBytes'|'IncomingRecords'|'OutgoingBytes'|'OutgoingRecords'|'WriteProvisionedThroughputExceeded'|'ReadProvisionedThroughputExceeded'|'IteratorAgeMilliseconds'|'ALL'> $ShardLevelMetrics
 * @property string $StreamARN
 */
class DisableEnhancedMonitoringRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     ShardLevelMetrics: list<'IncomingBytes'|'IncomingRecords'|'OutgoingBytes'|'OutgoingRecords'|'WriteProvisionedThroughputExceeded'|'ReadProvisionedThroughputExceeded'|'IteratorAgeMilliseconds'|'ALL'>,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

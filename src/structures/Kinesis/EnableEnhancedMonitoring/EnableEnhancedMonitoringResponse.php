<?php

namespace Sunaoka\Aws\Structures\Kinesis\EnableEnhancedMonitoring;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $StreamName
 * @property list<'IncomingBytes'|'IncomingRecords'|'OutgoingBytes'|'OutgoingRecords'|'WriteProvisionedThroughputExceeded'|'ReadProvisionedThroughputExceeded'|'IteratorAgeMilliseconds'|'ALL'> $CurrentShardLevelMetrics
 * @property list<'IncomingBytes'|'IncomingRecords'|'OutgoingBytes'|'OutgoingRecords'|'WriteProvisionedThroughputExceeded'|'ReadProvisionedThroughputExceeded'|'IteratorAgeMilliseconds'|'ALL'> $DesiredShardLevelMetrics
 * @property string $StreamARN
 */
class EnableEnhancedMonitoringResponse extends Response
{
}

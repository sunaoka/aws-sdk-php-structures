<?php

namespace Sunaoka\Aws\Structures\Kinesis\EnableEnhancedMonitoring;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $StreamName
 * @property list<'IncomingBytes'|'IncomingRecords'|'OutgoingBytes'|'OutgoingRecords'|'WriteProvisionedThroughputExceeded'|'ReadProvisionedThroughputExceeded'|'IteratorAgeMilliseconds'|'ALL'>|null $CurrentShardLevelMetrics
 * @property list<'IncomingBytes'|'IncomingRecords'|'OutgoingBytes'|'OutgoingRecords'|'WriteProvisionedThroughputExceeded'|'ReadProvisionedThroughputExceeded'|'IteratorAgeMilliseconds'|'ALL'>|null $DesiredShardLevelMetrics
 * @property string|null $StreamARN
 */
class EnableEnhancedMonitoringResponse extends Response
{
}

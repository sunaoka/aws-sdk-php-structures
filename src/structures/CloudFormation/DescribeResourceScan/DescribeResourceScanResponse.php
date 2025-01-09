<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeResourceScan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ResourceScanId
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETE'|'EXPIRED' $Status
 * @property string $StatusReason
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property double $PercentageCompleted
 * @property list<string> $ResourceTypes
 * @property int $ResourcesScanned
 * @property int $ResourcesRead
 */
class DescribeResourceScanResponse extends Response
{
}

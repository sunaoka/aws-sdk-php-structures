<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeResourceScan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceScanId
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETE'|'EXPIRED'|null $Status
 * @property string|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property double|null $PercentageCompleted
 * @property list<string>|null $ResourceTypes
 * @property int|null $ResourcesScanned
 * @property int|null $ResourcesRead
 */
class DescribeResourceScanResponse extends Response
{
}

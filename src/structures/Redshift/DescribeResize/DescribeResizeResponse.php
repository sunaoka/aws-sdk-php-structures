<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeResize;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TargetNodeType
 * @property int|null $TargetNumberOfNodes
 * @property string|null $TargetClusterType
 * @property string|null $Status
 * @property list<string>|null $ImportTablesCompleted
 * @property list<string>|null $ImportTablesInProgress
 * @property list<string>|null $ImportTablesNotStarted
 * @property double|null $AvgResizeRateInMegaBytesPerSecond
 * @property int|null $TotalResizeDataInMegaBytes
 * @property int|null $ProgressInMegaBytes
 * @property int|null $ElapsedTimeInSeconds
 * @property int|null $EstimatedTimeToCompletionInSeconds
 * @property string|null $ResizeType
 * @property string|null $Message
 * @property string|null $TargetEncryptionType
 * @property double|null $DataTransferProgressPercent
 */
class DescribeResizeResponse extends Response
{
}

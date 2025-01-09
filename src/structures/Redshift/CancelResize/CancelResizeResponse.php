<?php

namespace Sunaoka\Aws\Structures\Redshift\CancelResize;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TargetNodeType
 * @property int $TargetNumberOfNodes
 * @property string $TargetClusterType
 * @property string $Status
 * @property list<string> $ImportTablesCompleted
 * @property list<string> $ImportTablesInProgress
 * @property list<string> $ImportTablesNotStarted
 * @property double $AvgResizeRateInMegaBytesPerSecond
 * @property int $TotalResizeDataInMegaBytes
 * @property int $ProgressInMegaBytes
 * @property int $ElapsedTimeInSeconds
 * @property int $EstimatedTimeToCompletionInSeconds
 * @property string $ResizeType
 * @property string $Message
 * @property string $TargetEncryptionType
 * @property double $DataTransferProgressPercent
 */
class CancelResizeResponse extends Response
{
}

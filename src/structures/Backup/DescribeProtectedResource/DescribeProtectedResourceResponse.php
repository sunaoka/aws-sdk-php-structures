<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeProtectedResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ResourceArn
 * @property string $ResourceType
 * @property \Aws\Api\DateTimeResult $LastBackupTime
 * @property string $ResourceName
 * @property string $LastBackupVaultArn
 * @property string $LastRecoveryPointArn
 * @property int $LatestRestoreExecutionTimeMinutes
 * @property \Aws\Api\DateTimeResult $LatestRestoreJobCreationDate
 * @property \Aws\Api\DateTimeResult $LatestRestoreRecoveryPointCreationDate
 */
class DescribeProtectedResourceResponse extends Response
{
}

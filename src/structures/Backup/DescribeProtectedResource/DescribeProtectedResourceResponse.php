<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeProtectedResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 * @property \Aws\Api\DateTimeResult|null $LastBackupTime
 * @property string|null $ResourceName
 * @property string|null $LastBackupVaultArn
 * @property string|null $LastRecoveryPointArn
 * @property int|null $LatestRestoreExecutionTimeMinutes
 * @property \Aws\Api\DateTimeResult|null $LatestRestoreJobCreationDate
 * @property \Aws\Api\DateTimeResult|null $LatestRestoreRecoveryPointCreationDate
 */
class DescribeProtectedResourceResponse extends Response
{
}

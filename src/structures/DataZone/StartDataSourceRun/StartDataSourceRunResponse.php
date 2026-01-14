<?php

namespace Sunaoka\Aws\Structures\DataZone\StartDataSourceRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $dataSourceId
 * @property string $id
 * @property string $projectId
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS' $status
 * @property 'PRIORITIZED'|'SCHEDULED' $type
 * @property string|null $dataSourceConfigurationSnapshot
 * @property Shapes\RunStatisticsForAssets|null $runStatisticsForAssets
 * @property Shapes\DataSourceErrorMessage|null $errorMessage
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $stoppedAt
 */
class StartDataSourceRunResponse extends Response
{
}

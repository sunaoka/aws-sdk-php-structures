<?php

namespace Sunaoka\Aws\Structures\DataZone\StartDataSourceRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $dataSourceConfigurationSnapshot
 * @property string $dataSourceId
 * @property string $domainId
 * @property Shapes\DataSourceErrorMessage $errorMessage
 * @property string $id
 * @property string $projectId
 * @property Shapes\RunStatisticsForAssets $runStatisticsForAssets
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS' $status
 * @property \Aws\Api\DateTimeResult $stoppedAt
 * @property 'PRIORITIZED'|'SCHEDULED' $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class StartDataSourceRunResponse extends Response
{
}

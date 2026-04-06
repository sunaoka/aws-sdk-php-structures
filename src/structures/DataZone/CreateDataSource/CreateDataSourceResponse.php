<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION'|null $status
 * @property string|null $type
 * @property string $name
 * @property string|null $description
 * @property string $domainId
 * @property string $projectId
 * @property string|null $environmentId
 * @property string|null $connectionId
 * @property Shapes\DataSourceConfigurationOutput|null $configuration
 * @property Shapes\RecommendationConfiguration|null $recommendation
 * @property 'ENABLED'|'DISABLED'|null $enableSetting
 * @property bool|null $publishOnImport
 * @property list<Shapes\FormOutput>|null $assetFormsOutput
 * @property Shapes\ScheduleConfiguration|null $schedule
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS'|null $lastRunStatus
 * @property \Aws\Api\DateTimeResult|null $lastRunAt
 * @property Shapes\DataSourceErrorMessage|null $lastRunErrorMessage
 * @property Shapes\DataSourceErrorMessage|null $errorMessage
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CreateDataSourceResponse extends Response
{
}

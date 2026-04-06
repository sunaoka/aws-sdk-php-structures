<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FormOutput>|null $assetFormsOutput
 * @property Shapes\DataSourceConfigurationOutput|null $configuration
 * @property string|null $connectionId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string $domainId
 * @property 'ENABLED'|'DISABLED'|null $enableSetting
 * @property string|null $environmentId
 * @property Shapes\DataSourceErrorMessage|null $errorMessage
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $lastRunAt
 * @property Shapes\DataSourceErrorMessage|null $lastRunErrorMessage
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS'|null $lastRunStatus
 * @property string $name
 * @property string $projectId
 * @property bool|null $publishOnImport
 * @property Shapes\RecommendationConfiguration|null $recommendation
 * @property Shapes\ScheduleConfiguration|null $schedule
 * @property 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION'|null $status
 * @property string|null $type
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CreateDataSourceResponse extends Response
{
}

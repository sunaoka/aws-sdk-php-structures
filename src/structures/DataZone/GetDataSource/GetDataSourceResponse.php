<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FormOutput> $assetFormsOutput
 * @property Shapes\DataSourceConfigurationOutput $configuration
 * @property string $connectionId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $domainId
 * @property 'ENABLED'|'DISABLED' $enableSetting
 * @property string $environmentId
 * @property Shapes\DataSourceErrorMessage $errorMessage
 * @property string $id
 * @property int $lastRunAssetCount
 * @property \Aws\Api\DateTimeResult $lastRunAt
 * @property Shapes\DataSourceErrorMessage $lastRunErrorMessage
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS' $lastRunStatus
 * @property string $name
 * @property string $projectId
 * @property bool $publishOnImport
 * @property Shapes\RecommendationConfiguration $recommendation
 * @property Shapes\ScheduleConfiguration $schedule
 * @property Shapes\SelfGrantStatusOutput $selfGrantStatus
 * @property 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION' $status
 * @property string $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetDataSourceResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetOtaTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TaskId
 * @property string|null $TaskArn
 * @property string|null $Description
 * @property string|null $S3Url
 * @property 'HTTP'|null $Protocol
 * @property 'ONE_TIME'|'CONTINUOUS'|null $OtaType
 * @property string|null $OtaTargetQueryString
 * @property 'PUSH'|null $OtaMechanism
 * @property list<string>|null $Target
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $TaskConfigurationId
 * @property Shapes\TaskProcessingDetails|null $TaskProcessingDetails
 * @property Shapes\OtaTaskSchedulingConfig|null $OtaSchedulingConfig
 * @property Shapes\OtaTaskExecutionRetryConfig|null $OtaTaskExecutionRetryConfig
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED'|null $Status
 */
class GetOtaTaskResponse extends Response
{
}

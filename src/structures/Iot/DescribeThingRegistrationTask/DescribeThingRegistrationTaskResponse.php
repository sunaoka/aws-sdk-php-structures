<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingRegistrationTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $taskId
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property string $templateBody
 * @property string $inputFileBucket
 * @property string $inputFileKey
 * @property string $roleArn
 * @property 'InProgress'|'Completed'|'Failed'|'Cancelled'|'Cancelling' $status
 * @property string $message
 * @property int $successCount
 * @property int $failureCount
 * @property int $percentageProgress
 */
class DescribeThingRegistrationTaskResponse extends Response
{
}

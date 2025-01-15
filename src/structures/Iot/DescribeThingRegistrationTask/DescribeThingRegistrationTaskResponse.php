<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingRegistrationTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $taskId
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property string|null $templateBody
 * @property string|null $inputFileBucket
 * @property string|null $inputFileKey
 * @property string|null $roleArn
 * @property 'InProgress'|'Completed'|'Failed'|'Cancelled'|'Cancelling'|null $status
 * @property string|null $message
 * @property int|null $successCount
 * @property int|null $failureCount
 * @property int<0, 100>|null $percentageProgress
 */
class DescribeThingRegistrationTaskResponse extends Response
{
}

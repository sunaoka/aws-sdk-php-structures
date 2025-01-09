<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\StartUserImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobName
 * @property string $JobId
 * @property string $UserPoolId
 * @property string $PreSignedUrl
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $CompletionDate
 * @property 'Created'|'Pending'|'InProgress'|'Stopping'|'Expired'|'Stopped'|'Failed'|'Succeeded' $Status
 * @property string $CloudWatchLogsRoleArn
 * @property int $ImportedUsers
 * @property int $SkippedUsers
 * @property int $FailedUsers
 * @property string $CompletionMessage
 */
class UserImportJobType extends Shape
{
    /**
     * @param array{
     *     JobName?: string,
     *     JobId?: string,
     *     UserPoolId?: string,
     *     PreSignedUrl?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     CompletionDate?: \Aws\Api\DateTimeResult,
     *     Status?: 'Created'|'Pending'|'InProgress'|'Stopping'|'Expired'|'Stopped'|'Failed'|'Succeeded',
     *     CloudWatchLogsRoleArn?: string,
     *     ImportedUsers?: int,
     *     SkippedUsers?: int,
     *     FailedUsers?: int,
     *     CompletionMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\StartUserImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property string|null $JobId
 * @property string|null $UserPoolId
 * @property string|null $PreSignedUrl
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $CompletionDate
 * @property 'Created'|'Pending'|'InProgress'|'Stopping'|'Expired'|'Stopped'|'Failed'|'Succeeded'|null $Status
 * @property string|null $CloudWatchLogsRoleArn
 * @property int|null $ImportedUsers
 * @property int|null $SkippedUsers
 * @property int|null $FailedUsers
 * @property string|null $CompletionMessage
 */
class UserImportJobType extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     JobId?: string|null,
     *     UserPoolId?: string|null,
     *     PreSignedUrl?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     CompletionDate?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'Created'|'Pending'|'InProgress'|'Stopping'|'Expired'|'Stopped'|'Failed'|'Succeeded'|null,
     *     CloudWatchLogsRoleArn?: string|null,
     *     ImportedUsers?: int|null,
     *     SkippedUsers?: int|null,
     *     FailedUsers?: int|null,
     *     CompletionMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

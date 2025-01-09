<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelCard;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelCardArn
 * @property string $ModelCardName
 * @property int $ModelCardVersion
 * @property string $Content
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived' $ModelCardStatus
 * @property Shapes\ModelCardSecurityConfig $SecurityConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 * @property 'DeleteInProgress'|'DeletePending'|'ContentDeleted'|'ExportJobsDeleted'|'DeleteCompleted'|'DeleteFailed' $ModelCardProcessingStatus
 */
class DescribeModelCardResponse extends Response
{
}

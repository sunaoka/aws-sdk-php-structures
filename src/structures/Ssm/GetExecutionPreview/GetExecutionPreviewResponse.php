<?php

namespace Sunaoka\Aws\Structures\Ssm\GetExecutionPreview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ExecutionPreviewId
 * @property \Aws\Api\DateTimeResult $EndedAt
 * @property 'Pending'|'InProgress'|'Success'|'Failed' $Status
 * @property string $StatusMessage
 * @property Shapes\ExecutionPreview $ExecutionPreview
 */
class GetExecutionPreviewResponse extends Response
{
}

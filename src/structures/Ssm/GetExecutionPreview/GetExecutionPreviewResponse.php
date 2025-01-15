<?php

namespace Sunaoka\Aws\Structures\Ssm\GetExecutionPreview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ExecutionPreviewId
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property 'Pending'|'InProgress'|'Success'|'Failed'|null $Status
 * @property string|null $StatusMessage
 * @property Shapes\ExecutionPreview|null $ExecutionPreview
 */
class GetExecutionPreviewResponse extends Response
{
}

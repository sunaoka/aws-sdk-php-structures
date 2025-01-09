<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETED'|'FAILED'|'INACTIVE' $status
 * @property array<string, string> $tags
 */
class CreateWorkflowResponse extends Response
{
}

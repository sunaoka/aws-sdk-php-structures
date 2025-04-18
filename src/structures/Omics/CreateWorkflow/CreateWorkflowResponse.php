<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETED'|'FAILED'|'INACTIVE'|null $status
 * @property array<string, string>|null $tags
 * @property string|null $uuid
 */
class CreateWorkflowResponse extends Response
{
}

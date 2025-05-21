<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflowVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $workflowId
 * @property string|null $versionName
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETED'|'FAILED'|'INACTIVE'|null $status
 * @property array<string, string>|null $tags
 * @property string|null $uuid
 */
class CreateWorkflowVersionResponse extends Response
{
}

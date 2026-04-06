<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\CreateWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WorkflowArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $RevisionId
 * @property 'READY'|'DELETING'|null $WorkflowStatus
 * @property string|null $WorkflowVersion
 * @property bool|null $IsLatestVersion
 * @property list<string>|null $Warnings
 */
class CreateWorkflowResponse extends Response
{
}

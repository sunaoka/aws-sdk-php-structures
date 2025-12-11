<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\GetWorkflowRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WorkflowArn
 * @property string|null $WorkflowVersion
 * @property string|null $RunId
 * @property 'ON_DEMAND'|'SCHEDULED'|null $RunType
 * @property array<string, Shapes\Document>|null $OverrideParameters
 * @property Shapes\WorkflowRunDetail|null $RunDetail
 */
class GetWorkflowRunResponse extends Response
{
}

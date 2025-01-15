<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $pipelineName
 * @property int<1, max>|null $pipelineVersion
 * @property list<Shapes\StageState>|null $stageStates
 * @property \Aws\Api\DateTimeResult|null $created
 * @property \Aws\Api\DateTimeResult|null $updated
 */
class GetPipelineStateResponse extends Response
{
}

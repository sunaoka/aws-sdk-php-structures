<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $pipelineName
 * @property int $pipelineVersion
 * @property list<Shapes\StageState> $stageStates
 * @property \Aws\Api\DateTimeResult $created
 * @property \Aws\Api\DateTimeResult $updated
 */
class GetPipelineStateResponse extends Response
{
}

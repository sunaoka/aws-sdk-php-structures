<?php

namespace Sunaoka\Aws\Structures\OSIS;

class OSISClient extends \Aws\OSIS\OSISClient
{
    use CreatePipeline\CreatePipelineTrait;
    use DeletePipeline\DeletePipelineTrait;
    use GetPipeline\GetPipelineTrait;
    use GetPipelineBlueprint\GetPipelineBlueprintTrait;
    use GetPipelineChangeProgress\GetPipelineChangeProgressTrait;
    use ListPipelineBlueprints\ListPipelineBlueprintsTrait;
    use ListPipelines\ListPipelinesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartPipeline\StartPipelineTrait;
    use StopPipeline\StopPipelineTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePipeline\UpdatePipelineTrait;
    use ValidatePipeline\ValidatePipelineTrait;
}

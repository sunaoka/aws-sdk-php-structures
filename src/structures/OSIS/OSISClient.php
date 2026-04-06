<?php

namespace Sunaoka\Aws\Structures\OSIS;

class OSISClient extends \Aws\OSIS\OSISClient
{
    use CreatePipeline\CreatePipelineTrait;
    use CreatePipelineEndpoint\CreatePipelineEndpointTrait;
    use DeletePipeline\DeletePipelineTrait;
    use DeletePipelineEndpoint\DeletePipelineEndpointTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use GetPipeline\GetPipelineTrait;
    use GetPipelineBlueprint\GetPipelineBlueprintTrait;
    use GetPipelineChangeProgress\GetPipelineChangeProgressTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListPipelineBlueprints\ListPipelineBlueprintsTrait;
    use ListPipelineEndpointConnections\ListPipelineEndpointConnectionsTrait;
    use ListPipelineEndpoints\ListPipelineEndpointsTrait;
    use ListPipelines\ListPipelinesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RevokePipelineEndpointConnections\RevokePipelineEndpointConnectionsTrait;
    use StartPipeline\StartPipelineTrait;
    use StopPipeline\StopPipelineTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePipeline\UpdatePipelineTrait;
    use ValidatePipeline\ValidatePipelineTrait;
}

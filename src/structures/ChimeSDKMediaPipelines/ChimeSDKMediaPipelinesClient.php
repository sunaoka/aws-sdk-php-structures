<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines;

class ChimeSDKMediaPipelinesClient extends \Aws\ChimeSDKMediaPipelines\ChimeSDKMediaPipelinesClient
{
    use CreateMediaCapturePipeline\CreateMediaCapturePipelineTrait;
    use CreateMediaConcatenationPipeline\CreateMediaConcatenationPipelineTrait;
    use CreateMediaInsightsPipeline\CreateMediaInsightsPipelineTrait;
    use CreateMediaInsightsPipelineConfiguration\CreateMediaInsightsPipelineConfigurationTrait;
    use CreateMediaLiveConnectorPipeline\CreateMediaLiveConnectorPipelineTrait;
    use DeleteMediaCapturePipeline\DeleteMediaCapturePipelineTrait;
    use DeleteMediaInsightsPipelineConfiguration\DeleteMediaInsightsPipelineConfigurationTrait;
    use DeleteMediaPipeline\DeleteMediaPipelineTrait;
    use GetMediaCapturePipeline\GetMediaCapturePipelineTrait;
    use GetMediaInsightsPipelineConfiguration\GetMediaInsightsPipelineConfigurationTrait;
    use GetMediaPipeline\GetMediaPipelineTrait;
    use ListMediaCapturePipelines\ListMediaCapturePipelinesTrait;
    use ListMediaInsightsPipelineConfigurations\ListMediaInsightsPipelineConfigurationsTrait;
    use ListMediaPipelines\ListMediaPipelinesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMediaInsightsPipelineConfiguration\UpdateMediaInsightsPipelineConfigurationTrait;
    use UpdateMediaInsightsPipelineStatus\UpdateMediaInsightsPipelineStatusTrait;
}

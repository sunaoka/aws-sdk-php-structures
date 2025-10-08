<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines;

class ChimeSDKMediaPipelinesClient extends \Aws\ChimeSDKMediaPipelines\ChimeSDKMediaPipelinesClient
{
    use CreateMediaCapturePipeline\CreateMediaCapturePipelineTrait;
    use CreateMediaConcatenationPipeline\CreateMediaConcatenationPipelineTrait;
    use CreateMediaInsightsPipeline\CreateMediaInsightsPipelineTrait;
    use CreateMediaInsightsPipelineConfiguration\CreateMediaInsightsPipelineConfigurationTrait;
    use CreateMediaLiveConnectorPipeline\CreateMediaLiveConnectorPipelineTrait;
    use CreateMediaPipelineKinesisVideoStreamPool\CreateMediaPipelineKinesisVideoStreamPoolTrait;
    use CreateMediaStreamPipeline\CreateMediaStreamPipelineTrait;
    use DeleteMediaCapturePipeline\DeleteMediaCapturePipelineTrait;
    use DeleteMediaInsightsPipelineConfiguration\DeleteMediaInsightsPipelineConfigurationTrait;
    use DeleteMediaPipeline\DeleteMediaPipelineTrait;
    use DeleteMediaPipelineKinesisVideoStreamPool\DeleteMediaPipelineKinesisVideoStreamPoolTrait;
    use GetMediaCapturePipeline\GetMediaCapturePipelineTrait;
    use GetMediaInsightsPipelineConfiguration\GetMediaInsightsPipelineConfigurationTrait;
    use GetMediaPipeline\GetMediaPipelineTrait;
    use GetMediaPipelineKinesisVideoStreamPool\GetMediaPipelineKinesisVideoStreamPoolTrait;
    use GetSpeakerSearchTask\GetSpeakerSearchTaskTrait;
    use GetVoiceToneAnalysisTask\GetVoiceToneAnalysisTaskTrait;
    use ListMediaCapturePipelines\ListMediaCapturePipelinesTrait;
    use ListMediaInsightsPipelineConfigurations\ListMediaInsightsPipelineConfigurationsTrait;
    use ListMediaPipelineKinesisVideoStreamPools\ListMediaPipelineKinesisVideoStreamPoolsTrait;
    use ListMediaPipelines\ListMediaPipelinesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartSpeakerSearchTask\StartSpeakerSearchTaskTrait;
    use StartVoiceToneAnalysisTask\StartVoiceToneAnalysisTaskTrait;
    use StopSpeakerSearchTask\StopSpeakerSearchTaskTrait;
    use StopVoiceToneAnalysisTask\StopVoiceToneAnalysisTaskTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMediaInsightsPipelineConfiguration\UpdateMediaInsightsPipelineConfigurationTrait;
    use UpdateMediaInsightsPipelineStatus\UpdateMediaInsightsPipelineStatusTrait;
    use UpdateMediaPipelineKinesisVideoStreamPool\UpdateMediaPipelineKinesisVideoStreamPoolTrait;
}

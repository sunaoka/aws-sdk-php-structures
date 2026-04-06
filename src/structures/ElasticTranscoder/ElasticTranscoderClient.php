<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder;

class ElasticTranscoderClient extends \Aws\ElasticTranscoder\ElasticTranscoderClient
{
    use CancelJob\CancelJobTrait;
    use CreateJob\CreateJobTrait;
    use CreatePipeline\CreatePipelineTrait;
    use CreatePreset\CreatePresetTrait;
    use DeletePipeline\DeletePipelineTrait;
    use DeletePreset\DeletePresetTrait;
    use ListJobsByPipeline\ListJobsByPipelineTrait;
    use ListJobsByStatus\ListJobsByStatusTrait;
    use ListPipelines\ListPipelinesTrait;
    use ListPresets\ListPresetsTrait;
    use ReadJob\ReadJobTrait;
    use ReadPipeline\ReadPipelineTrait;
    use ReadPreset\ReadPresetTrait;
    use TestRole\TestRoleTrait;
    use UpdatePipeline\UpdatePipelineTrait;
    use UpdatePipelineNotifications\UpdatePipelineNotificationsTrait;
    use UpdatePipelineStatus\UpdatePipelineStatusTrait;
}

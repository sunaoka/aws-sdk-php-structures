<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService;

class ConnectCampaignServiceClient extends \Aws\ConnectCampaignService\ConnectCampaignServiceClient
{
    use CreateCampaign\CreateCampaignTrait;
    use DeleteCampaign\DeleteCampaignTrait;
    use DeleteConnectInstanceConfig\DeleteConnectInstanceConfigTrait;
    use DeleteInstanceOnboardingJob\DeleteInstanceOnboardingJobTrait;
    use DescribeCampaign\DescribeCampaignTrait;
    use GetCampaignState\GetCampaignStateTrait;
    use GetCampaignStateBatch\GetCampaignStateBatchTrait;
    use GetConnectInstanceConfig\GetConnectInstanceConfigTrait;
    use GetInstanceOnboardingJobStatus\GetInstanceOnboardingJobStatusTrait;
    use ListCampaigns\ListCampaignsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PauseCampaign\PauseCampaignTrait;
    use PutDialRequestBatch\PutDialRequestBatchTrait;
    use ResumeCampaign\ResumeCampaignTrait;
    use StartCampaign\StartCampaignTrait;
    use StartInstanceOnboardingJob\StartInstanceOnboardingJobTrait;
    use StopCampaign\StopCampaignTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCampaignDialerConfig\UpdateCampaignDialerConfigTrait;
    use UpdateCampaignName\UpdateCampaignNameTrait;
    use UpdateCampaignOutboundCallConfig\UpdateCampaignOutboundCallConfigTrait;
}

<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2;

class ConnectCampaignsV2Client extends \Aws\ConnectCampaignsV2\ConnectCampaignsV2Client
{
    use CreateCampaign\CreateCampaignTrait;
    use DeleteCampaign\DeleteCampaignTrait;
    use DeleteCampaignChannelSubtypeConfig\DeleteCampaignChannelSubtypeConfigTrait;
    use DeleteCampaignCommunicationLimits\DeleteCampaignCommunicationLimitsTrait;
    use DeleteCampaignCommunicationTime\DeleteCampaignCommunicationTimeTrait;
    use DeleteConnectInstanceConfig\DeleteConnectInstanceConfigTrait;
    use DeleteConnectInstanceIntegration\DeleteConnectInstanceIntegrationTrait;
    use DeleteInstanceOnboardingJob\DeleteInstanceOnboardingJobTrait;
    use DescribeCampaign\DescribeCampaignTrait;
    use GetCampaignState\GetCampaignStateTrait;
    use GetCampaignStateBatch\GetCampaignStateBatchTrait;
    use GetConnectInstanceConfig\GetConnectInstanceConfigTrait;
    use GetInstanceCommunicationLimits\GetInstanceCommunicationLimitsTrait;
    use GetInstanceOnboardingJobStatus\GetInstanceOnboardingJobStatusTrait;
    use ListCampaigns\ListCampaignsTrait;
    use ListConnectInstanceIntegrations\ListConnectInstanceIntegrationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PauseCampaign\PauseCampaignTrait;
    use PutConnectInstanceIntegration\PutConnectInstanceIntegrationTrait;
    use PutInstanceCommunicationLimits\PutInstanceCommunicationLimitsTrait;
    use PutOutboundRequestBatch\PutOutboundRequestBatchTrait;
    use PutProfileOutboundRequestBatch\PutProfileOutboundRequestBatchTrait;
    use ResumeCampaign\ResumeCampaignTrait;
    use StartCampaign\StartCampaignTrait;
    use StartInstanceOnboardingJob\StartInstanceOnboardingJobTrait;
    use StopCampaign\StopCampaignTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCampaignChannelSubtypeConfig\UpdateCampaignChannelSubtypeConfigTrait;
    use UpdateCampaignCommunicationLimits\UpdateCampaignCommunicationLimitsTrait;
    use UpdateCampaignCommunicationTime\UpdateCampaignCommunicationTimeTrait;
    use UpdateCampaignFlowAssociation\UpdateCampaignFlowAssociationTrait;
    use UpdateCampaignName\UpdateCampaignNameTrait;
    use UpdateCampaignSchedule\UpdateCampaignScheduleTrait;
    use UpdateCampaignSource\UpdateCampaignSourceTrait;
}

<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing;

class PartnerCentralMarketingClient extends \Aws\PartnerCentralMarketing\PartnerCentralMarketingClient
{
    use BatchCreateCampaignAsset\BatchCreateCampaignAssetTrait;
    use CreateCampaign\CreateCampaignTrait;
    use CreateSocialConnectionAuthorizationUrl\CreateSocialConnectionAuthorizationUrlTrait;
    use DeactivateCampaignAsset\DeactivateCampaignAssetTrait;
    use DeleteCampaign\DeleteCampaignTrait;
    use DeleteCampaignAsset\DeleteCampaignAssetTrait;
    use DeleteSocialConnection\DeleteSocialConnectionTrait;
    use GetCampaign\GetCampaignTrait;
    use GetCampaignAsset\GetCampaignAssetTrait;
    use GetCampaignAssetActivationTask\GetCampaignAssetActivationTaskTrait;
    use GetCampaignAssetExportTask\GetCampaignAssetExportTaskTrait;
    use GetCampaignTemplate\GetCampaignTemplateTrait;
    use ListCampaignAssets\ListCampaignAssetsTrait;
    use ListCampaigns\ListCampaignsTrait;
    use ListSocialConnections\ListSocialConnectionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SearchCampaignTemplates\SearchCampaignTemplatesTrait;
    use StartCampaignAssetActivationTask\StartCampaignAssetActivationTaskTrait;
    use StartCampaignAssetExportTask\StartCampaignAssetExportTaskTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCampaign\UpdateCampaignTrait;
    use UpdateCampaignAsset\UpdateCampaignAssetTrait;
}

<?php

namespace Sunaoka\Aws\Structures\PinpointEmail;

class PinpointEmailClient extends \Aws\PinpointEmail\PinpointEmailClient
{
    use CreateConfigurationSet\CreateConfigurationSetTrait;
    use CreateConfigurationSetEventDestination\CreateConfigurationSetEventDestinationTrait;
    use CreateDedicatedIpPool\CreateDedicatedIpPoolTrait;
    use CreateDeliverabilityTestReport\CreateDeliverabilityTestReportTrait;
    use CreateEmailIdentity\CreateEmailIdentityTrait;
    use DeleteConfigurationSet\DeleteConfigurationSetTrait;
    use DeleteConfigurationSetEventDestination\DeleteConfigurationSetEventDestinationTrait;
    use DeleteDedicatedIpPool\DeleteDedicatedIpPoolTrait;
    use DeleteEmailIdentity\DeleteEmailIdentityTrait;
    use GetAccount\GetAccountTrait;
    use GetBlacklistReports\GetBlacklistReportsTrait;
    use GetConfigurationSet\GetConfigurationSetTrait;
    use GetConfigurationSetEventDestinations\GetConfigurationSetEventDestinationsTrait;
    use GetDedicatedIp\GetDedicatedIpTrait;
    use GetDedicatedIps\GetDedicatedIpsTrait;
    use GetDeliverabilityDashboardOptions\GetDeliverabilityDashboardOptionsTrait;
    use GetDeliverabilityTestReport\GetDeliverabilityTestReportTrait;
    use GetDomainDeliverabilityCampaign\GetDomainDeliverabilityCampaignTrait;
    use GetDomainStatisticsReport\GetDomainStatisticsReportTrait;
    use GetEmailIdentity\GetEmailIdentityTrait;
    use ListConfigurationSets\ListConfigurationSetsTrait;
    use ListDedicatedIpPools\ListDedicatedIpPoolsTrait;
    use ListDeliverabilityTestReports\ListDeliverabilityTestReportsTrait;
    use ListDomainDeliverabilityCampaigns\ListDomainDeliverabilityCampaignsTrait;
    use ListEmailIdentities\ListEmailIdentitiesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutAccountDedicatedIpWarmupAttributes\PutAccountDedicatedIpWarmupAttributesTrait;
    use PutAccountSendingAttributes\PutAccountSendingAttributesTrait;
    use PutConfigurationSetDeliveryOptions\PutConfigurationSetDeliveryOptionsTrait;
    use PutConfigurationSetReputationOptions\PutConfigurationSetReputationOptionsTrait;
    use PutConfigurationSetSendingOptions\PutConfigurationSetSendingOptionsTrait;
    use PutConfigurationSetTrackingOptions\PutConfigurationSetTrackingOptionsTrait;
    use PutDedicatedIpInPool\PutDedicatedIpInPoolTrait;
    use PutDedicatedIpWarmupAttributes\PutDedicatedIpWarmupAttributesTrait;
    use PutDeliverabilityDashboardOption\PutDeliverabilityDashboardOptionTrait;
    use PutEmailIdentityDkimAttributes\PutEmailIdentityDkimAttributesTrait;
    use PutEmailIdentityFeedbackAttributes\PutEmailIdentityFeedbackAttributesTrait;
    use PutEmailIdentityMailFromAttributes\PutEmailIdentityMailFromAttributesTrait;
    use SendEmail\SendEmailTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateConfigurationSetEventDestination\UpdateConfigurationSetEventDestinationTrait;
}

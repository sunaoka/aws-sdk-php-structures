<?php

namespace Sunaoka\Aws\Structures\MailManager;

class MailManagerClient extends \Aws\MailManager\MailManagerClient
{
    use CreateAddonInstance\CreateAddonInstanceTrait;
    use CreateAddonSubscription\CreateAddonSubscriptionTrait;
    use CreateArchive\CreateArchiveTrait;
    use CreateIngressPoint\CreateIngressPointTrait;
    use CreateRelay\CreateRelayTrait;
    use CreateRuleSet\CreateRuleSetTrait;
    use CreateTrafficPolicy\CreateTrafficPolicyTrait;
    use DeleteAddonInstance\DeleteAddonInstanceTrait;
    use DeleteAddonSubscription\DeleteAddonSubscriptionTrait;
    use DeleteArchive\DeleteArchiveTrait;
    use DeleteIngressPoint\DeleteIngressPointTrait;
    use DeleteRelay\DeleteRelayTrait;
    use DeleteRuleSet\DeleteRuleSetTrait;
    use DeleteTrafficPolicy\DeleteTrafficPolicyTrait;
    use GetAddonInstance\GetAddonInstanceTrait;
    use GetAddonSubscription\GetAddonSubscriptionTrait;
    use GetArchive\GetArchiveTrait;
    use GetArchiveExport\GetArchiveExportTrait;
    use GetArchiveMessage\GetArchiveMessageTrait;
    use GetArchiveMessageContent\GetArchiveMessageContentTrait;
    use GetArchiveSearch\GetArchiveSearchTrait;
    use GetArchiveSearchResults\GetArchiveSearchResultsTrait;
    use GetIngressPoint\GetIngressPointTrait;
    use GetRelay\GetRelayTrait;
    use GetRuleSet\GetRuleSetTrait;
    use GetTrafficPolicy\GetTrafficPolicyTrait;
    use ListAddonInstances\ListAddonInstancesTrait;
    use ListAddonSubscriptions\ListAddonSubscriptionsTrait;
    use ListArchiveExports\ListArchiveExportsTrait;
    use ListArchiveSearches\ListArchiveSearchesTrait;
    use ListArchives\ListArchivesTrait;
    use ListIngressPoints\ListIngressPointsTrait;
    use ListRelays\ListRelaysTrait;
    use ListRuleSets\ListRuleSetsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTrafficPolicies\ListTrafficPoliciesTrait;
    use StartArchiveExport\StartArchiveExportTrait;
    use StartArchiveSearch\StartArchiveSearchTrait;
    use StopArchiveExport\StopArchiveExportTrait;
    use StopArchiveSearch\StopArchiveSearchTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateArchive\UpdateArchiveTrait;
    use UpdateIngressPoint\UpdateIngressPointTrait;
    use UpdateRelay\UpdateRelayTrait;
    use UpdateRuleSet\UpdateRuleSetTrait;
    use UpdateTrafficPolicy\UpdateTrafficPolicyTrait;
}

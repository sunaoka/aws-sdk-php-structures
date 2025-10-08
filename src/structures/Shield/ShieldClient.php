<?php

namespace Sunaoka\Aws\Structures\Shield;

class ShieldClient extends \Aws\Shield\ShieldClient
{
    use AssociateDRTLogBucket\AssociateDRTLogBucketTrait;
    use AssociateDRTRole\AssociateDRTRoleTrait;
    use AssociateHealthCheck\AssociateHealthCheckTrait;
    use AssociateProactiveEngagementDetails\AssociateProactiveEngagementDetailsTrait;
    use CreateProtection\CreateProtectionTrait;
    use CreateProtectionGroup\CreateProtectionGroupTrait;
    use CreateSubscription\CreateSubscriptionTrait;
    use DeleteProtection\DeleteProtectionTrait;
    use DeleteProtectionGroup\DeleteProtectionGroupTrait;
    use DeleteSubscription\DeleteSubscriptionTrait;
    use DescribeAttack\DescribeAttackTrait;
    use DescribeAttackStatistics\DescribeAttackStatisticsTrait;
    use DescribeDRTAccess\DescribeDRTAccessTrait;
    use DescribeEmergencyContactSettings\DescribeEmergencyContactSettingsTrait;
    use DescribeProtection\DescribeProtectionTrait;
    use DescribeProtectionGroup\DescribeProtectionGroupTrait;
    use DescribeSubscription\DescribeSubscriptionTrait;
    use DisableApplicationLayerAutomaticResponse\DisableApplicationLayerAutomaticResponseTrait;
    use DisableProactiveEngagement\DisableProactiveEngagementTrait;
    use DisassociateDRTLogBucket\DisassociateDRTLogBucketTrait;
    use DisassociateDRTRole\DisassociateDRTRoleTrait;
    use DisassociateHealthCheck\DisassociateHealthCheckTrait;
    use EnableApplicationLayerAutomaticResponse\EnableApplicationLayerAutomaticResponseTrait;
    use EnableProactiveEngagement\EnableProactiveEngagementTrait;
    use GetSubscriptionState\GetSubscriptionStateTrait;
    use ListAttacks\ListAttacksTrait;
    use ListProtectionGroups\ListProtectionGroupsTrait;
    use ListProtections\ListProtectionsTrait;
    use ListResourcesInProtectionGroup\ListResourcesInProtectionGroupTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplicationLayerAutomaticResponse\UpdateApplicationLayerAutomaticResponseTrait;
    use UpdateEmergencyContactSettings\UpdateEmergencyContactSettingsTrait;
    use UpdateProtectionGroup\UpdateProtectionGroupTrait;
    use UpdateSubscription\UpdateSubscriptionTrait;
}

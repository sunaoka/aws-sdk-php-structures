<?php

namespace Sunaoka\Aws\Structures\Health;

class HealthClient extends \Aws\Health\HealthClient
{
    use ConfigureTags\ConfigureTagsTrait;
    use ConfigureTagsForOrganization\ConfigureTagsForOrganizationTrait;
    use DescribeAffectedAccountsForOrganization\DescribeAffectedAccountsForOrganizationTrait;
    use DescribeAffectedEntities\DescribeAffectedEntitiesTrait;
    use DescribeAffectedEntitiesForOrganization\DescribeAffectedEntitiesForOrganizationTrait;
    use DescribeEntityAggregates\DescribeEntityAggregatesTrait;
    use DescribeEntityAggregatesForOrganization\DescribeEntityAggregatesForOrganizationTrait;
    use DescribeEventAggregates\DescribeEventAggregatesTrait;
    use DescribeEventDetails\DescribeEventDetailsTrait;
    use DescribeEventDetailsForOrganization\DescribeEventDetailsForOrganizationTrait;
    use DescribeEventTypes\DescribeEventTypesTrait;
    use DescribeEvents\DescribeEventsTrait;
    use DescribeEventsForOrganization\DescribeEventsForOrganizationTrait;
    use DescribeHealthServiceStatusForOrganization\DescribeHealthServiceStatusForOrganizationTrait;
    use DescribeServiceLifecycle\DescribeServiceLifecycleTrait;
    use DescribeTagKeys\DescribeTagKeysTrait;
    use DescribeTagKeysForOrganization\DescribeTagKeysForOrganizationTrait;
    use DescribeTags\DescribeTagsTrait;
    use DescribeTagsForOrganization\DescribeTagsForOrganizationTrait;
    use DescribeTagsOnboardingStatus\DescribeTagsOnboardingStatusTrait;
    use DescribeTagsOnboardingStatusForOrganization\DescribeTagsOnboardingStatusForOrganizationTrait;
    use DisableHealthServiceAccessForOrganization\DisableHealthServiceAccessForOrganizationTrait;
    use DisableTags\DisableTagsTrait;
    use DisableTagsForOrganization\DisableTagsForOrganizationTrait;
    use EnableHealthServiceAccessForOrganization\EnableHealthServiceAccessForOrganizationTrait;
    use EnableTags\EnableTagsTrait;
    use EnableTagsForOrganization\EnableTagsForOrganizationTrait;
}

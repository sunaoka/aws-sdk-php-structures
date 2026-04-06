<?php

namespace Sunaoka\Aws\Structures\Health;

class HealthClient extends \Aws\Health\HealthClient
{
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
    use DisableHealthServiceAccessForOrganization\DisableHealthServiceAccessForOrganizationTrait;
    use EnableHealthServiceAccessForOrganization\EnableHealthServiceAccessForOrganizationTrait;
}

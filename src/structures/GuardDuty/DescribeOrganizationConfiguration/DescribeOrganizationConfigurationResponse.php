<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $AutoEnable
 * @property bool $MemberAccountLimitReached
 * @property Shapes\OrganizationDataSourceConfigurationsResult|null $DataSources
 * @property list<Shapes\OrganizationFeatureConfigurationResult>|null $Features
 * @property string|null $NextToken
 * @property 'NEW'|'ALL'|'NONE'|null $AutoEnableOrganizationMembers
 */
class DescribeOrganizationConfigurationResponse extends Response
{
}

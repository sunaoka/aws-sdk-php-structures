<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $AutoEnable
 * @property bool $MemberAccountLimitReached
 * @property Shapes\OrganizationDataSourceConfigurationsResult $DataSources
 * @property list<Shapes\OrganizationFeatureConfigurationResult> $Features
 * @property string $NextToken
 * @property 'NEW'|'ALL'|'NONE' $AutoEnableOrganizationMembers
 */
class DescribeOrganizationConfigurationResponse extends Response
{
}

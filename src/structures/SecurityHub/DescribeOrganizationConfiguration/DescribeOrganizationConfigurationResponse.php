<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeOrganizationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $AutoEnable
 * @property bool $MemberAccountLimitReached
 * @property 'NONE'|'DEFAULT' $AutoEnableStandards
 * @property Shapes\OrganizationConfiguration $OrganizationConfiguration
 */
class DescribeOrganizationConfigurationResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeOrganizationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $AutoEnable
 * @property bool|null $MemberAccountLimitReached
 * @property 'NONE'|'DEFAULT'|null $AutoEnableStandards
 * @property Shapes\OrganizationConfiguration|null $OrganizationConfiguration
 */
class DescribeOrganizationConfigurationResponse extends Response
{
}

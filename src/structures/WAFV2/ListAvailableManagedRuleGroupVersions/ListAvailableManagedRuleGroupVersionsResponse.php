<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAvailableManagedRuleGroupVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextMarker
 * @property list<Shapes\ManagedRuleGroupVersion>|null $Versions
 * @property string|null $CurrentDefaultVersion
 */
class ListAvailableManagedRuleGroupVersionsResponse extends Response
{
}

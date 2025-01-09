<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAvailableManagedRuleGroupVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextMarker
 * @property list<Shapes\ManagedRuleGroupVersion> $Versions
 * @property string $CurrentDefaultVersion
 */
class ListAvailableManagedRuleGroupVersionsResponse extends Response
{
}

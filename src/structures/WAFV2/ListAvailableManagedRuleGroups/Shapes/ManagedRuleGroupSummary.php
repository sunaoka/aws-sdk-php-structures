<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAvailableManagedRuleGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VendorName
 * @property string|null $Name
 * @property bool|null $VersioningSupported
 * @property string|null $Description
 */
class ManagedRuleGroupSummary extends Shape
{
    /**
     * @param array{
     *     VendorName?: string|null,
     *     Name?: string|null,
     *     VersioningSupported?: bool|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

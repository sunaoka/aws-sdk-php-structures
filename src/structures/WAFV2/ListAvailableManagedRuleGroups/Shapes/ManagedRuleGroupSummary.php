<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAvailableManagedRuleGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VendorName
 * @property string $Name
 * @property bool $VersioningSupported
 * @property string $Description
 */
class ManagedRuleGroupSummary extends Shape
{
    /**
     * @param array{
     *     VendorName?: string,
     *     Name?: string,
     *     VersioningSupported?: bool,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

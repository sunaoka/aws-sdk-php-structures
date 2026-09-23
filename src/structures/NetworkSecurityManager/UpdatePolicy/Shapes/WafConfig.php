<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RETROFIT'|'OVERRIDE_ASSOCIATION'|'NO_REMEDIATION' $existingCustomerWebACLResolution
 * @property 'MERGE_WHERE_APPLICABLE' $conflictResolution
 */
class WafConfig extends Shape
{
    /**
     * @param array{
     *     existingCustomerWebACLResolution: 'RETROFIT'|'OVERRIDE_ASSOCIATION'|'NO_REMEDIATION',
     *     conflictResolution: 'MERGE_WHERE_APPLICABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

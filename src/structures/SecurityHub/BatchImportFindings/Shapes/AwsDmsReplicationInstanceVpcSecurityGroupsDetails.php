<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcSecurityGroupId
 */
class AwsDmsReplicationInstanceVpcSecurityGroupsDetails extends Shape
{
    /**
     * @param array{VpcSecurityGroupId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcSecurityGroupId
 */
class AwsDmsReplicationInstanceVpcSecurityGroupsDetails extends Shape
{
    /**
     * @param array{VpcSecurityGroupId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

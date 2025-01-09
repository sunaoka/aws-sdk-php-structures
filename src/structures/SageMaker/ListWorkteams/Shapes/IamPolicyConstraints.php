<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListWorkteams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $SourceIp
 * @property 'Enabled'|'Disabled' $VpcSourceIp
 */
class IamPolicyConstraints extends Shape
{
    /**
     * @param array{
     *     SourceIp?: 'Enabled'|'Disabled',
     *     VpcSourceIp?: 'Enabled'|'Disabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

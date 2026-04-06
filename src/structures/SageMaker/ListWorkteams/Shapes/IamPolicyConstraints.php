<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListWorkteams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled'|null $SourceIp
 * @property 'Enabled'|'Disabled'|null $VpcSourceIp
 */
class IamPolicyConstraints extends Shape
{
    /**
     * @param array{
     *     SourceIp?: 'Enabled'|'Disabled'|null,
     *     VpcSourceIp?: 'Enabled'|'Disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

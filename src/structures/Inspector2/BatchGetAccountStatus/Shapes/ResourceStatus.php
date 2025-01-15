<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetAccountStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED' $ec2
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED' $ecr
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED'|null $lambda
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED'|null $lambdaCode
 */
class ResourceStatus extends Shape
{
    /**
     * @param array{
     *     ec2: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED',
     *     ecr: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED',
     *     lambda?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED'|null,
     *     lambdaCode?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

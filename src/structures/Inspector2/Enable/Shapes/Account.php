<?php

namespace Sunaoka\Aws\Structures\Inspector2\Enable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED' $status
 * @property ResourceStatus $resourceStatus
 */
class Account extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     status: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED',
     *     resourceStatus: ResourceStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

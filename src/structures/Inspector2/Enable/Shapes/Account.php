<?php

namespace Sunaoka\Aws\Structures\Inspector2\Enable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property ResourceStatus $resourceStatus
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED' $status
 */
class Account extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     resourceStatus: ResourceStatus,
     *     status: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

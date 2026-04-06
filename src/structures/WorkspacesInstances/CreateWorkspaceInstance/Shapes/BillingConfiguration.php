<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONTHLY'|'HOURLY' $BillingMode
 */
class BillingConfiguration extends Shape
{
    /**
     * @param array{BillingMode: 'MONTHLY'|'HOURLY'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $subscriptionId
 */
class AzureConfiguration extends Shape
{
    /**
     * @param array{subscriptionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

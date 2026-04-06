<?php

namespace Sunaoka\Aws\Structures\FMS\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkAclEntrySet $NetworkAclEntrySet
 */
class NetworkAclCommonPolicy extends Shape
{
    /**
     * @param array{NetworkAclEntrySet: NetworkAclEntrySet} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

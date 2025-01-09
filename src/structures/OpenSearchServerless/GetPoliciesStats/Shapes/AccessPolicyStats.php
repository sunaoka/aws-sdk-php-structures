<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetPoliciesStats\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataPolicyCount
 */
class AccessPolicyStats extends Shape
{
    /**
     * @param array{DataPolicyCount?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

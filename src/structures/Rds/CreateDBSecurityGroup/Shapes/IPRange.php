<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property string $CIDRIP
 */
class IPRange extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     CIDRIP?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

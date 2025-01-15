<?php

namespace Sunaoka\Aws\Structures\Rds\AuthorizeDBSecurityGroupIngress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 * @property string|null $CIDRIP
 */
class IPRange extends Shape
{
    /**
     * @param array{
     *     Status?: string|null,
     *     CIDRIP?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

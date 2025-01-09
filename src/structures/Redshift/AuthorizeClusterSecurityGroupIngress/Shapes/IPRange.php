<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeClusterSecurityGroupIngress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property string $CIDRIP
 * @property list<Tag> $Tags
 */
class IPRange extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     CIDRIP?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

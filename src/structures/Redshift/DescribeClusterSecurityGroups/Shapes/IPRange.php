<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 * @property string|null $CIDRIP
 * @property list<Tag>|null $Tags
 */
class IPRange extends Shape
{
    /**
     * @param array{
     *     Status?: string|null,
     *     CIDRIP?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

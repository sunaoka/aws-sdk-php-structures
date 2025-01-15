<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByWebACLId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CNAME
 * @property 'APPROVED'|'SUSPENDED'|'PENDING'|null $ICPRecordalStatus
 */
class AliasICPRecordal extends Shape
{
    /**
     * @param array{
     *     CNAME?: string|null,
     *     ICPRecordalStatus?: 'APPROVED'|'SUSPENDED'|'PENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

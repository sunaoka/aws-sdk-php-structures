<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CNAME
 * @property 'APPROVED'|'SUSPENDED'|'PENDING' $ICPRecordalStatus
 */
class AliasICPRecordal extends Shape
{
    /**
     * @param array{
     *     CNAME?: string,
     *     ICPRecordalStatus?: 'APPROVED'|'SUSPENDED'|'PENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

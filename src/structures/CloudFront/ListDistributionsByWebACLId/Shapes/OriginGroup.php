<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByWebACLId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property OriginGroupFailoverCriteria $FailoverCriteria
 * @property OriginGroupMembers $Members
 */
class OriginGroup extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     FailoverCriteria: OriginGroupFailoverCriteria,
     *     Members: OriginGroupMembers
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

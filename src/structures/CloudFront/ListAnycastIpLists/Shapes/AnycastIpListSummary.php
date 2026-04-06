<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListAnycastIpLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Status
 * @property string $Arn
 * @property int $IpCount
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class AnycastIpListSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     Status: string,
     *     Arn: string,
     *     IpCount: int,
     *     LastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

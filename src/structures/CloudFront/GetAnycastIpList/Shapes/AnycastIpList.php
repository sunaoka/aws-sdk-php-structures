<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetAnycastIpList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Status
 * @property string $Arn
 * @property list<string> $AnycastIps
 * @property int $IpCount
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class AnycastIpList extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     Status: string,
     *     Arn: string,
     *     AnycastIps: list<string>,
     *     IpCount: int,
     *     LastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

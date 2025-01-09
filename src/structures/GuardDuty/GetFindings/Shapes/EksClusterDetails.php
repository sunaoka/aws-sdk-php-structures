<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $VpcId
 * @property string $Status
 * @property list<Tag> $Tags
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class EksClusterDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     VpcId?: string,
     *     Status?: string,
     *     Tags?: list<Tag>,
     *     CreatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

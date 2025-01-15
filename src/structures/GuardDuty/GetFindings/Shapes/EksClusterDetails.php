<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $VpcId
 * @property string|null $Status
 * @property list<Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class EksClusterDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     VpcId?: string|null,
     *     Status?: string|null,
     *     Tags?: list<Tag>|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

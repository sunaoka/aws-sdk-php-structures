<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $CreatedBy
 * @property string $Id
 * @property int $MemberCount
 * @property string $Title
 */
class EngagementSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: string,
     *     Id?: string,
     *     MemberCount?: int,
     *     Title?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

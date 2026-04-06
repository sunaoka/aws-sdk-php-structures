<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $CreatedBy
 * @property string|null $Id
 * @property int|null $MemberCount
 * @property string|null $Title
 */
class EngagementSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     Id?: string|null,
     *     MemberCount?: int|null,
     *     Title?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Title
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $CreatedBy
 * @property int|null $MemberCount
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property string|null $ModifiedBy
 * @property list<EngagementContextDetails>|null $Contexts
 */
class EngagementSearchSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Title?: string|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     MemberCount?: int|null,
     *     ModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     ModifiedBy?: string|null,
     *     Contexts?: list<EngagementContextDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

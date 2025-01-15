<?php

namespace Sunaoka\Aws\Structures\Connect\ListTrafficDistributionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $InstanceArn
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'PENDING_DELETION'|'DELETION_FAILED'|'UPDATE_IN_PROGRESS'|null $Status
 * @property bool|null $IsDefault
 */
class TrafficDistributionGroupSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     InstanceArn?: string|null,
     *     Status?: 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'PENDING_DELETION'|'DELETION_FAILED'|'UPDATE_IN_PROGRESS'|null,
     *     IsDefault?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\ListTrafficDistributionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $InstanceArn
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'PENDING_DELETION'|'DELETION_FAILED'|'UPDATE_IN_PROGRESS' $Status
 * @property bool $IsDefault
 */
class TrafficDistributionGroupSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     InstanceArn?: string,
     *     Status?: 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'PENDING_DELETION'|'DELETION_FAILED'|'UPDATE_IN_PROGRESS',
     *     IsDefault?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeTrafficDistributionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $InstanceArn
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'PENDING_DELETION'|'DELETION_FAILED'|'UPDATE_IN_PROGRESS'|null $Status
 * @property array<string, string>|null $Tags
 * @property bool|null $IsDefault
 */
class TrafficDistributionGroup extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     InstanceArn?: string|null,
     *     Status?: 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'PENDING_DELETION'|'DELETION_FAILED'|'UPDATE_IN_PROGRESS'|null,
     *     Tags?: array<string, string>|null,
     *     IsDefault?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

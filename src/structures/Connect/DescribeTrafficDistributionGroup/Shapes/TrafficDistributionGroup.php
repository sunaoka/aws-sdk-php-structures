<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeTrafficDistributionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property string $InstanceArn
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'PENDING_DELETION'|'DELETION_FAILED'|'UPDATE_IN_PROGRESS' $Status
 * @property array<string, string> $Tags
 * @property bool $IsDefault
 */
class TrafficDistributionGroup extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Description?: string,
     *     InstanceArn?: string,
     *     Status?: 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'PENDING_DELETION'|'DELETION_FAILED'|'UPDATE_IN_PROGRESS',
     *     Tags?: array<string, string>,
     *     IsDefault?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

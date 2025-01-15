<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateOutpostResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CreationTime
 * @property string|null $ModificationTime
 * @property string|null $CreatorRequestId
 * @property string|null $Id
 * @property int|null $InstanceCount
 * @property string|null $PreferredInstanceType
 * @property string|null $Name
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING'|'ACTION_NEEDED'|'FAILED_CREATION'|'FAILED_DELETION'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $OutpostArn
 */
class OutpostResolver extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreationTime?: string|null,
     *     ModificationTime?: string|null,
     *     CreatorRequestId?: string|null,
     *     Id?: string|null,
     *     InstanceCount?: int|null,
     *     PreferredInstanceType?: string|null,
     *     Name?: string|null,
     *     Status?: 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING'|'ACTION_NEEDED'|'FAILED_CREATION'|'FAILED_DELETION'|null,
     *     StatusMessage?: string|null,
     *     OutpostArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

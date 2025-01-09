<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateOutpostResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CreationTime
 * @property string $ModificationTime
 * @property string $CreatorRequestId
 * @property string $Id
 * @property int $InstanceCount
 * @property string $PreferredInstanceType
 * @property string $Name
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING'|'ACTION_NEEDED'|'FAILED_CREATION'|'FAILED_DELETION' $Status
 * @property string $StatusMessage
 * @property string $OutpostArn
 */
class OutpostResolver extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreationTime?: string,
     *     ModificationTime?: string,
     *     CreatorRequestId?: string,
     *     Id?: string,
     *     InstanceCount?: int,
     *     PreferredInstanceType?: string,
     *     Name?: string,
     *     Status?: 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING'|'ACTION_NEEDED'|'FAILED_CREATION'|'FAILED_DELETION',
     *     StatusMessage?: string,
     *     OutpostArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

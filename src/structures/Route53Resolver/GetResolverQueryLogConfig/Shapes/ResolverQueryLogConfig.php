<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverQueryLogConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $OwnerId
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|null $Status
 * @property 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'|null $ShareStatus
 * @property int|null $AssociationCount
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $DestinationArn
 * @property string|null $CreatorRequestId
 * @property string|null $CreationTime
 */
class ResolverQueryLogConfig extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     OwnerId?: string|null,
     *     Status?: 'CREATING'|'CREATED'|'DELETING'|'FAILED'|null,
     *     ShareStatus?: 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'|null,
     *     AssociationCount?: int|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     DestinationArn?: string|null,
     *     CreatorRequestId?: string|null,
     *     CreationTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

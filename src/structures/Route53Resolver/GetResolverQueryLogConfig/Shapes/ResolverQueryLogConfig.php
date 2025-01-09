<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverQueryLogConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $OwnerId
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED' $Status
 * @property 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME' $ShareStatus
 * @property int $AssociationCount
 * @property string $Arn
 * @property string $Name
 * @property string $DestinationArn
 * @property string $CreatorRequestId
 * @property string $CreationTime
 */
class ResolverQueryLogConfig extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     OwnerId?: string,
     *     Status?: 'CREATING'|'CREATED'|'DELETING'|'FAILED',
     *     ShareStatus?: 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME',
     *     AssociationCount?: int,
     *     Arn?: string,
     *     Name?: string,
     *     DestinationArn?: string,
     *     CreatorRequestId?: string,
     *     CreationTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

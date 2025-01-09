<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverQueryLogConfigAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ResolverQueryLogConfigId
 * @property string $ResourceId
 * @property 'CREATING'|'ACTIVE'|'ACTION_NEEDED'|'DELETING'|'FAILED' $Status
 * @property 'NONE'|'DESTINATION_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_SERVICE_ERROR' $Error
 * @property string $ErrorMessage
 * @property string $CreationTime
 */
class ResolverQueryLogConfigAssociation extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ResolverQueryLogConfigId?: string,
     *     ResourceId?: string,
     *     Status?: 'CREATING'|'ACTIVE'|'ACTION_NEEDED'|'DELETING'|'FAILED',
     *     Error?: 'NONE'|'DESTINATION_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_SERVICE_ERROR',
     *     ErrorMessage?: string,
     *     CreationTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

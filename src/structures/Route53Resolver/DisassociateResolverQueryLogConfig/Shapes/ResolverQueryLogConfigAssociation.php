<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DisassociateResolverQueryLogConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ResolverQueryLogConfigId
 * @property string|null $ResourceId
 * @property 'CREATING'|'ACTIVE'|'ACTION_NEEDED'|'DELETING'|'FAILED'|null $Status
 * @property 'NONE'|'DESTINATION_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_SERVICE_ERROR'|null $Error
 * @property string|null $ErrorMessage
 * @property string|null $CreationTime
 */
class ResolverQueryLogConfigAssociation extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ResolverQueryLogConfigId?: string|null,
     *     ResourceId?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'ACTION_NEEDED'|'DELETING'|'FAILED'|null,
     *     Error?: 'NONE'|'DESTINATION_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_SERVICE_ERROR'|null,
     *     ErrorMessage?: string|null,
     *     CreationTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

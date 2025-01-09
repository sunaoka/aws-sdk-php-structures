<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DisassociateResolverRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ResolverRuleId
 * @property string $Name
 * @property string $VPCId
 * @property 'CREATING'|'COMPLETE'|'DELETING'|'FAILED'|'OVERRIDDEN' $Status
 * @property string $StatusMessage
 */
class ResolverRuleAssociation extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ResolverRuleId?: string,
     *     Name?: string,
     *     VPCId?: string,
     *     Status?: 'CREATING'|'COMPLETE'|'DELETING'|'FAILED'|'OVERRIDDEN',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverRuleAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ResolverRuleId
 * @property string|null $Name
 * @property string|null $VPCId
 * @property 'CREATING'|'COMPLETE'|'DELETING'|'FAILED'|'OVERRIDDEN'|null $Status
 * @property string|null $StatusMessage
 */
class ResolverRuleAssociation extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ResolverRuleId?: string|null,
     *     Name?: string|null,
     *     VPCId?: string|null,
     *     Status?: 'CREATING'|'COMPLETE'|'DELETING'|'FAILED'|'OVERRIDDEN'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

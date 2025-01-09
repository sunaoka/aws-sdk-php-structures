<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverRuleAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverRuleAssociationId
 */
class GetResolverRuleAssociationRequest extends Request
{
    /**
     * @param array{ResolverRuleAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

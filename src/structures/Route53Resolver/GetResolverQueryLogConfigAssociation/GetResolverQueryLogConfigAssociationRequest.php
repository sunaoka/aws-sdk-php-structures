<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverQueryLogConfigAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverQueryLogConfigAssociationId
 */
class GetResolverQueryLogConfigAssociationRequest extends Request
{
    /**
     * @param array{ResolverQueryLogConfigAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

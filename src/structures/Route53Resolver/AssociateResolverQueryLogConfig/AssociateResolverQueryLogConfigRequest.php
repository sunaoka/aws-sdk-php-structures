<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\AssociateResolverQueryLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverQueryLogConfigId
 * @property string $ResourceId
 */
class AssociateResolverQueryLogConfigRequest extends Request
{
    /**
     * @param array{
     *     ResolverQueryLogConfigId: string,
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

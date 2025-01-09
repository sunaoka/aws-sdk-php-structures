<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DisassociateResolverQueryLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverQueryLogConfigId
 * @property string $ResourceId
 */
class DisassociateResolverQueryLogConfigRequest extends Request
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

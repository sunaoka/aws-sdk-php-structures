<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 */
class GetResolverConfigRequest extends Request
{
    /**
     * @param array{ResourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverDnssecConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 */
class GetResolverDnssecConfigRequest extends Request
{
    /**
     * @param array{ResourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

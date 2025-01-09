<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverDnssecConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property 'ENABLE'|'DISABLE'|'USE_LOCAL_RESOURCE_SETTING' $Validation
 */
class UpdateResolverDnssecConfigRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     Validation: 'ENABLE'|'DISABLE'|'USE_LOCAL_RESOURCE_SETTING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

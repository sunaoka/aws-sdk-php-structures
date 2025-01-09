<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property 'ENABLE'|'DISABLE'|'USE_LOCAL_RESOURCE_SETTING' $AutodefinedReverseFlag
 */
class UpdateResolverConfigRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     AutodefinedReverseFlag: 'ENABLE'|'DISABLE'|'USE_LOCAL_RESOURCE_SETTING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

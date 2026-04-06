<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateGlobalResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $globalResolverId
 * @property string|null $name
 * @property string|null $observabilityRegion
 * @property string|null $description
 * @property 'IPV4'|'DUAL_STACK'|null $ipAddressType
 */
class UpdateGlobalResolverRequest extends Request
{
    /**
     * @param array{
     *     globalResolverId: string,
     *     name?: string|null,
     *     observabilityRegion?: string|null,
     *     description?: string|null,
     *     ipAddressType?: 'IPV4'|'DUAL_STACK'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

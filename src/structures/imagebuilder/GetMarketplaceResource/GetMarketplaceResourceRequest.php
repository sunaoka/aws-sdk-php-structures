<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetMarketplaceResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'COMPONENT_DATA'|'COMPONENT_ARTIFACT' $resourceType
 * @property string $resourceArn
 * @property string $resourceLocation
 */
class GetMarketplaceResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'COMPONENT_DATA'|'COMPONENT_ARTIFACT',
     *     resourceArn: string,
     *     resourceLocation?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

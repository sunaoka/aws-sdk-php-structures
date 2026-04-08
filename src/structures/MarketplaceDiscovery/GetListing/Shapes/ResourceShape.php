<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MANUFACTURER_SUPPORT'|'MANUFACTURER_INSTRUCTIONS' $resourceType
 * @property 'EMAIL'|'PHONE_NUMBER'|'LINK'|'OTHER' $contentType
 * @property string $value
 * @property string|null $displayName
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     resourceType: 'MANUFACTURER_SUPPORT'|'MANUFACTURER_INSTRUCTIONS',
     *     contentType: 'EMAIL'|'PHONE_NUMBER'|'LINK'|'OTHER',
     *     value: string,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

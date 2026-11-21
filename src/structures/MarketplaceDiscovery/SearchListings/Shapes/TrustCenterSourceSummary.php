<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'PHONE_NUMBER'|'LINK'|'OTHER' $contentType
 * @property string $value
 * @property string|null $displayName
 * @property 'DRATA'|'VANTA'|'OTHER' $provider
 */
class TrustCenterSourceSummary extends Shape
{
    /**
     * @param array{
     *     contentType: 'EMAIL'|'PHONE_NUMBER'|'LINK'|'OTHER',
     *     value: string,
     *     displayName?: string|null,
     *     provider: 'DRATA'|'VANTA'|'OTHER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property list<'SECURITY'|'AI_GOVERNANCE'|'RESILIENCE'> $domains
 */
class TrustCenterControl extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     domains: list<'SECURITY'|'AI_GOVERNANCE'|'RESILIENCE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

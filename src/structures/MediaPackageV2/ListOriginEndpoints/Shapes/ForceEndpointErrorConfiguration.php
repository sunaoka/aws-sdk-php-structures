<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListOriginEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'STALE_MANIFEST'|'INCOMPLETE_MANIFEST'|'MISSING_DRM_KEY'|'SLATE_INPUT'>|null $EndpointErrorConditions
 */
class ForceEndpointErrorConfiguration extends Shape
{
    /**
     * @param array{EndpointErrorConditions?: list<'STALE_MANIFEST'|'INCOMPLETE_MANIFEST'|'MISSING_DRM_KEY'|'SLATE_INPUT'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

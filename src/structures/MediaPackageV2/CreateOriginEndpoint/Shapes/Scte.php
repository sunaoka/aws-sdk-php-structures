<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'|'PROGRAM'>|null $ScteFilter
 * @property 'NONE'|'ALL'|null $ScteInSegments
 */
class Scte extends Shape
{
    /**
     * @param array{
     *     ScteFilter?: list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'|'PROGRAM'>|null,
     *     ScteInSegments?: 'NONE'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

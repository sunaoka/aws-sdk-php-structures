<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetGeoMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GeoMatchSetId
 */
class GetGeoMatchSetRequest extends Request
{
    /**
     * @param array{GeoMatchSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateGeoMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GeoMatchSetId
 * @property string $ChangeToken
 * @property list<Shapes\GeoMatchSetUpdate> $Updates
 */
class UpdateGeoMatchSetRequest extends Request
{
    /**
     * @param array{
     *     GeoMatchSetId: string,
     *     ChangeToken: string,
     *     Updates: list<Shapes\GeoMatchSetUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

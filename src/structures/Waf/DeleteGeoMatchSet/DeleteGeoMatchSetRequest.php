<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteGeoMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GeoMatchSetId
 * @property string $ChangeToken
 */
class DeleteGeoMatchSetRequest extends Request
{
    /**
     * @param array{
     *     GeoMatchSetId: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

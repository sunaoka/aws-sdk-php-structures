<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListTrustStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property int|null $MaxItems
 */
class ListTrustStoresRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListKeyValueStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 * @property string|null $Status
 */
class ListKeyValueStoresRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

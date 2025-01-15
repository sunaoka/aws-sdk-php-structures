<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeCustomKeyStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CustomKeyStoreId
 * @property string|null $CustomKeyStoreName
 * @property int<1, 1000>|null $Limit
 * @property string|null $Marker
 */
class DescribeCustomKeyStoresRequest extends Request
{
    /**
     * @param array{
     *     CustomKeyStoreId?: string|null,
     *     CustomKeyStoreName?: string|null,
     *     Limit?: int<1, 1000>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeCustomKeyStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomKeyStoreId
 * @property string $CustomKeyStoreName
 * @property int $Limit
 * @property string $Marker
 */
class DescribeCustomKeyStoresRequest extends Request
{
    /**
     * @param array{
     *     CustomKeyStoreId?: string,
     *     CustomKeyStoreName?: string,
     *     Limit?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

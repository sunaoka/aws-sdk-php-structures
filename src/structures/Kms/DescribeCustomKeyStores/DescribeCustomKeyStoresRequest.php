<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeCustomKeyStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomKeyStoreId
 * @property string $CustomKeyStoreName
 * @property int<1, 1000> $Limit
 * @property string $Marker
 */
class DescribeCustomKeyStoresRequest extends Request
{
    /**
     * @param array{
     *     CustomKeyStoreId?: string,
     *     CustomKeyStoreName?: string,
     *     Limit?: int<1, 1000>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

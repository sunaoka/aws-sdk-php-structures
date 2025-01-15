<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DataShareArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDataSharesRequest extends Request
{
    /**
     * @param array{
     *     DataShareArn?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

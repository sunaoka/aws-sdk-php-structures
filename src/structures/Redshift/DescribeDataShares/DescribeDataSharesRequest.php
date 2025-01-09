<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataShareArn
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDataSharesRequest extends Request
{
    /**
     * @param array{
     *     DataShareArn?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

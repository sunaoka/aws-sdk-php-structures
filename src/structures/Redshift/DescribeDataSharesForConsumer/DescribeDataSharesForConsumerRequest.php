<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataSharesForConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConsumerArn
 * @property 'ACTIVE'|'AVAILABLE' $Status
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDataSharesForConsumerRequest extends Request
{
    /**
     * @param array{
     *     ConsumerArn?: string,
     *     Status?: 'ACTIVE'|'AVAILABLE',
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

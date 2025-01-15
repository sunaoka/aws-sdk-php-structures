<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataSharesForConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ConsumerArn
 * @property 'ACTIVE'|'AVAILABLE'|null $Status
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDataSharesForConsumerRequest extends Request
{
    /**
     * @param array{
     *     ConsumerArn?: string|null,
     *     Status?: 'ACTIVE'|'AVAILABLE'|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

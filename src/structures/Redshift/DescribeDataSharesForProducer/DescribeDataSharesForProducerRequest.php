<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataSharesForProducer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProducerArn
 * @property 'ACTIVE'|'AUTHORIZED'|'PENDING_AUTHORIZATION'|'DEAUTHORIZED'|'REJECTED' $Status
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDataSharesForProducerRequest extends Request
{
    /**
     * @param array{
     *     ProducerArn?: string,
     *     Status?: 'ACTIVE'|'AUTHORIZED'|'PENDING_AUTHORIZATION'|'DEAUTHORIZED'|'REJECTED',
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

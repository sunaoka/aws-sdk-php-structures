<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataSharesForProducer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProducerArn
 * @property 'ACTIVE'|'AUTHORIZED'|'PENDING_AUTHORIZATION'|'DEAUTHORIZED'|'REJECTED'|null $Status
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDataSharesForProducerRequest extends Request
{
    /**
     * @param array{
     *     ProducerArn?: string|null,
     *     Status?: 'ACTIVE'|'AUTHORIZED'|'PENDING_AUTHORIZATION'|'DEAUTHORIZED'|'REJECTED'|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

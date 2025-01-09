<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataSharesForConsumer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConsumerIdentifier
 * @property 'ACTIVE'|'PENDING_AUTHORIZATION'|'AUTHORIZED'|'DEAUTHORIZED'|'REJECTED'|'AVAILABLE' $Status
 * @property string $ConsumerRegion
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $StatusChangeDate
 * @property bool $ProducerAllowedWrites
 * @property bool $ConsumerAcceptedWrites
 */
class DataShareAssociation extends Shape
{
    /**
     * @param array{
     *     ConsumerIdentifier?: string,
     *     Status?: 'ACTIVE'|'PENDING_AUTHORIZATION'|'AUTHORIZED'|'DEAUTHORIZED'|'REJECTED'|'AVAILABLE',
     *     ConsumerRegion?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     StatusChangeDate?: \Aws\Api\DateTimeResult,
     *     ProducerAllowedWrites?: bool,
     *     ConsumerAcceptedWrites?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Redshift\AssociateDataShareConsumer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConsumerIdentifier
 * @property 'ACTIVE'|'PENDING_AUTHORIZATION'|'AUTHORIZED'|'DEAUTHORIZED'|'REJECTED'|'AVAILABLE'|null $Status
 * @property string|null $ConsumerRegion
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $StatusChangeDate
 * @property bool|null $ProducerAllowedWrites
 * @property bool|null $ConsumerAcceptedWrites
 */
class DataShareAssociation extends Shape
{
    /**
     * @param array{
     *     ConsumerIdentifier?: string|null,
     *     Status?: 'ACTIVE'|'PENDING_AUTHORIZATION'|'AUTHORIZED'|'DEAUTHORIZED'|'REJECTED'|'AVAILABLE'|null,
     *     ConsumerRegion?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     StatusChangeDate?: \Aws\Api\DateTimeResult|null,
     *     ProducerAllowedWrites?: bool|null,
     *     ConsumerAcceptedWrites?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDelivery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $deliverySourceName
 * @property string|null $deliveryDestinationArn
 * @property 'S3'|'CWL'|'FH'|'XRAY'|null $deliveryDestinationType
 * @property list<string>|null $recordFields
 * @property string|null $fieldDelimiter
 * @property S3DeliveryConfiguration|null $s3DeliveryConfiguration
 * @property array<string, string>|null $tags
 */
class Delivery extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     deliverySourceName?: string|null,
     *     deliveryDestinationArn?: string|null,
     *     deliveryDestinationType?: 'S3'|'CWL'|'FH'|'XRAY'|null,
     *     recordFields?: list<string>|null,
     *     fieldDelimiter?: string|null,
     *     s3DeliveryConfiguration?: S3DeliveryConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

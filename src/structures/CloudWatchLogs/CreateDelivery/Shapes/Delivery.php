<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateDelivery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $deliverySourceName
 * @property string $deliveryDestinationArn
 * @property 'S3'|'CWL'|'FH' $deliveryDestinationType
 * @property list<string> $recordFields
 * @property string $fieldDelimiter
 * @property S3DeliveryConfiguration $s3DeliveryConfiguration
 * @property array<string, string> $tags
 */
class Delivery extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     deliverySourceName?: string,
     *     deliveryDestinationArn?: string,
     *     deliveryDestinationType?: 'S3'|'CWL'|'FH',
     *     recordFields?: list<string>,
     *     fieldDelimiter?: string,
     *     s3DeliveryConfiguration?: S3DeliveryConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

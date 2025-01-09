<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDeliveryDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property 'S3'|'CWL'|'FH' $deliveryDestinationType
 * @property 'json'|'plain'|'w3c'|'raw'|'parquet' $outputFormat
 * @property DeliveryDestinationConfiguration $deliveryDestinationConfiguration
 * @property array<string, string> $tags
 */
class DeliveryDestination extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     deliveryDestinationType?: 'S3'|'CWL'|'FH',
     *     outputFormat?: 'json'|'plain'|'w3c'|'raw'|'parquet',
     *     deliveryDestinationConfiguration?: DeliveryDestinationConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

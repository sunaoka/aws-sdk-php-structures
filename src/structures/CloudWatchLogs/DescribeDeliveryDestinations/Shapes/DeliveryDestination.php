<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDeliveryDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property 'S3'|'CWL'|'FH'|'XRAY'|null $deliveryDestinationType
 * @property 'json'|'plain'|'w3c'|'raw'|'parquet'|null $outputFormat
 * @property DeliveryDestinationConfiguration|null $deliveryDestinationConfiguration
 * @property array<string, string>|null $tags
 */
class DeliveryDestination extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     deliveryDestinationType?: 'S3'|'CWL'|'FH'|'XRAY'|null,
     *     outputFormat?: 'json'|'plain'|'w3c'|'raw'|'parquet'|null,
     *     deliveryDestinationConfiguration?: DeliveryDestinationConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

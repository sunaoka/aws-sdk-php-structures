<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDeliveryDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'json'|'plain'|'w3c'|'raw'|'parquet' $outputFormat
 * @property Shapes\DeliveryDestinationConfiguration $deliveryDestinationConfiguration
 * @property array<string, string> $tags
 */
class PutDeliveryDestinationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     outputFormat?: 'json'|'plain'|'w3c'|'raw'|'parquet',
     *     deliveryDestinationConfiguration: Shapes\DeliveryDestinationConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDeliveryDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'json'|'plain'|'w3c'|'raw'|'parquet'|null $outputFormat
 * @property Shapes\DeliveryDestinationConfiguration $deliveryDestinationConfiguration
 * @property array<string, string>|null $tags
 */
class PutDeliveryDestinationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     outputFormat?: 'json'|'plain'|'w3c'|'raw'|'parquet'|null,
     *     deliveryDestinationConfiguration: Shapes\DeliveryDestinationConfiguration,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

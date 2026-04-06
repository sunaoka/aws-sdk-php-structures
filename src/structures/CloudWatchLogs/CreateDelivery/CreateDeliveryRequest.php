<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateDelivery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deliverySourceName
 * @property string $deliveryDestinationArn
 * @property list<string>|null $recordFields
 * @property string|null $fieldDelimiter
 * @property Shapes\S3DeliveryConfiguration|null $s3DeliveryConfiguration
 * @property array<string, string>|null $tags
 */
class CreateDeliveryRequest extends Request
{
    /**
     * @param array{
     *     deliverySourceName: string,
     *     deliveryDestinationArn: string,
     *     recordFields?: list<string>|null,
     *     fieldDelimiter?: string|null,
     *     s3DeliveryConfiguration?: Shapes\S3DeliveryConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateDelivery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deliverySourceName
 * @property string $deliveryDestinationArn
 * @property list<string> $recordFields
 * @property string $fieldDelimiter
 * @property Shapes\S3DeliveryConfiguration $s3DeliveryConfiguration
 * @property array<string, string> $tags
 */
class CreateDeliveryRequest extends Request
{
    /**
     * @param array{
     *     deliverySourceName: string,
     *     deliveryDestinationArn: string,
     *     recordFields?: list<string>,
     *     fieldDelimiter?: string,
     *     s3DeliveryConfiguration?: Shapes\S3DeliveryConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

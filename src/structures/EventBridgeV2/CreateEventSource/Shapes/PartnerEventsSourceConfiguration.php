<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PartnerEventSourceArn
 * @property string|null $Pattern
 * @property string|null $PartnerBusKmsKeyIdentifier
 * @property OnFailureConfiguration|null $OnFailureConfiguration
 */
class PartnerEventsSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     PartnerEventSourceArn: string,
     *     Pattern?: string|null,
     *     PartnerBusKmsKeyIdentifier?: string|null,
     *     OnFailureConfiguration?: OnFailureConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

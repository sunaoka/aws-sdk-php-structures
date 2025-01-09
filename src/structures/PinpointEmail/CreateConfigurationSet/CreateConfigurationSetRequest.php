<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateConfigurationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\TrackingOptions $TrackingOptions
 * @property Shapes\DeliveryOptions $DeliveryOptions
 * @property Shapes\ReputationOptions $ReputationOptions
 * @property Shapes\SendingOptions $SendingOptions
 * @property list<Shapes\Tag> $Tags
 */
class CreateConfigurationSetRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     TrackingOptions?: Shapes\TrackingOptions,
     *     DeliveryOptions?: Shapes\DeliveryOptions,
     *     ReputationOptions?: Shapes\ReputationOptions,
     *     SendingOptions?: Shapes\SendingOptions,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

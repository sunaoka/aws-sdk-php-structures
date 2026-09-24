<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsService
 * @property string|null $Pattern
 * @property OnFailureConfiguration|null $OnFailureConfiguration
 */
class AwsServiceEventsSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     AwsService: string,
     *     Pattern?: string|null,
     *     OnFailureConfiguration?: OnFailureConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

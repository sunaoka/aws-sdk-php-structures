<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\CreateWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property string $fleet
 * @property string|null $additionalTransientProperties
 * @property string|null $additionalFixedProperties
 * @property Shapes\VendorProperties|null $vendorProperties
 * @property Shapes\PositionCoordinates|null $position
 * @property Shapes\Orientation|null $orientation
 */
class CreateWorkerRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     fleet: string,
     *     additionalTransientProperties?: string|null,
     *     additionalFixedProperties?: string|null,
     *     vendorProperties?: Shapes\VendorProperties|null,
     *     position?: Shapes\PositionCoordinates|null,
     *     orientation?: Shapes\Orientation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

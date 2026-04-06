<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\UpdateWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property string|null $additionalTransientProperties
 * @property string|null $additionalFixedProperties
 * @property Shapes\VendorProperties|null $vendorProperties
 * @property Shapes\PositionCoordinates|null $position
 * @property Shapes\Orientation|null $orientation
 */
class UpdateWorkerRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
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

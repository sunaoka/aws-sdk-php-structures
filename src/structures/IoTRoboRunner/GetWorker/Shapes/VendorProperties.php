<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\GetWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vendorWorkerId
 * @property string|null $vendorWorkerIpAddress
 * @property string|null $vendorAdditionalTransientProperties
 * @property string|null $vendorAdditionalFixedProperties
 */
class VendorProperties extends Shape
{
    /**
     * @param array{
     *     vendorWorkerId: string,
     *     vendorWorkerIpAddress?: string|null,
     *     vendorAdditionalTransientProperties?: string|null,
     *     vendorAdditionalFixedProperties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

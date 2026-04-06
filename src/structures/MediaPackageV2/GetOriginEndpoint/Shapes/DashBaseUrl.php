<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 * @property string|null $ServiceLocation
 * @property int<1, 15000>|null $DvbPriority
 * @property int<1, 15000>|null $DvbWeight
 */
class DashBaseUrl extends Shape
{
    /**
     * @param array{
     *     Url: string,
     *     ServiceLocation?: string|null,
     *     DvbPriority?: int<1, 15000>|null,
     *     DvbWeight?: int<1, 15000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

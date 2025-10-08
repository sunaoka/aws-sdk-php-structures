<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateUserEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppVersion
 * @property string|null $Locale
 * @property string|null $Make
 * @property string|null $Model
 * @property string|null $ModelVersion
 * @property string|null $Platform
 * @property string|null $PlatformVersion
 * @property string|null $Timezone
 */
class EndpointDemographic extends Shape
{
    /**
     * @param array{
     *     AppVersion?: string|null,
     *     Locale?: string|null,
     *     Make?: string|null,
     *     Model?: string|null,
     *     ModelVersion?: string|null,
     *     Platform?: string|null,
     *     PlatformVersion?: string|null,
     *     Timezone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

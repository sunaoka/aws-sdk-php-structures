<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppVersion
 * @property string $Locale
 * @property string $Make
 * @property string $Model
 * @property string $ModelVersion
 * @property string $Platform
 * @property string $PlatformVersion
 * @property string $Timezone
 */
class EndpointDemographic extends Shape
{
    /**
     * @param array{
     *     AppVersion?: string,
     *     Locale?: string,
     *     Make?: string,
     *     Model?: string,
     *     ModelVersion?: string,
     *     Platform?: string,
     *     PlatformVersion?: string,
     *     Timezone?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

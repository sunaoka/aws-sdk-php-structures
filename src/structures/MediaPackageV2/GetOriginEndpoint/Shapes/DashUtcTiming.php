<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HTTP_HEAD'|'HTTP_ISO'|'HTTP_XSDATE'|'UTC_DIRECT'|null $TimingMode
 * @property string|null $TimingSource
 */
class DashUtcTiming extends Shape
{
    /**
     * @param array{
     *     TimingMode?: 'HTTP_HEAD'|'HTTP_ISO'|'HTTP_XSDATE'|'UTC_DIRECT'|null,
     *     TimingSource?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

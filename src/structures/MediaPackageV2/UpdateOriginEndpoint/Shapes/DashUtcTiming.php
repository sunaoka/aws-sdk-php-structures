<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HTTP_HEAD'|'HTTP_ISO'|'HTTP_XSDATE'|'UTC_DIRECT' $TimingMode
 * @property string $TimingSource
 */
class DashUtcTiming extends Shape
{
    /**
     * @param array{
     *     TimingMode?: 'HTTP_HEAD'|'HTTP_ISO'|'HTTP_XSDATE'|'UTC_DIRECT',
     *     TimingSource?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

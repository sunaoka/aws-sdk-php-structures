<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestFilter
 * @property \Aws\Api\DateTimeResult $Start
 * @property \Aws\Api\DateTimeResult $End
 * @property int $TimeDelaySeconds
 * @property \Aws\Api\DateTimeResult $ClipStartTime
 */
class FilterConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestFilter?: string,
     *     Start?: \Aws\Api\DateTimeResult,
     *     End?: \Aws\Api\DateTimeResult,
     *     TimeDelaySeconds?: int,
     *     ClipStartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManifestFilter
 * @property string|null $DrmSettings
 * @property \Aws\Api\DateTimeResult|null $Start
 * @property \Aws\Api\DateTimeResult|null $End
 * @property int<0, 1209600>|null $TimeDelaySeconds
 * @property \Aws\Api\DateTimeResult|null $ClipStartTime
 */
class FilterConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestFilter?: string|null,
     *     DrmSettings?: string|null,
     *     Start?: \Aws\Api\DateTimeResult|null,
     *     End?: \Aws\Api\DateTimeResult|null,
     *     TimeDelaySeconds?: int<0, 1209600>|null,
     *     ClipStartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

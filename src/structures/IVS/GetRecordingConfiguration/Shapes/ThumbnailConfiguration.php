<?php

namespace Sunaoka\Aws\Structures\IVS\GetRecordingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'INTERVAL'|null $recordingMode
 * @property 'SD'|'HD'|'FULL_HD'|'LOWEST_RESOLUTION'|null $resolution
 * @property list<'SEQUENTIAL'|'LATEST'>|null $storage
 * @property int<1, 60>|null $targetIntervalSeconds
 */
class ThumbnailConfiguration extends Shape
{
    /**
     * @param array{
     *     recordingMode?: 'DISABLED'|'INTERVAL'|null,
     *     resolution?: 'SD'|'HD'|'FULL_HD'|'LOWEST_RESOLUTION'|null,
     *     storage?: list<'SEQUENTIAL'|'LATEST'>|null,
     *     targetIntervalSeconds?: int<1, 60>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

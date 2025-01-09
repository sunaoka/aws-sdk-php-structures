<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'INTERVAL' $recordingMode
 * @property 'SD'|'HD'|'FULL_HD'|'LOWEST_RESOLUTION' $resolution
 * @property list<'SEQUENTIAL'|'LATEST'> $storage
 * @property int $targetIntervalSeconds
 */
class ThumbnailConfiguration extends Shape
{
    /**
     * @param array{
     *     recordingMode?: 'DISABLED'|'INTERVAL',
     *     resolution?: 'SD'|'HD'|'FULL_HD'|'LOWEST_RESOLUTION',
     *     storage?: list<'SEQUENTIAL'|'LATEST'>,
     *     targetIntervalSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

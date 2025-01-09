<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 86400> $targetIntervalSeconds
 * @property list<'SEQUENTIAL'|'LATEST'> $storage
 * @property 'INTERVAL'|'DISABLED' $recordingMode
 */
class ParticipantThumbnailConfiguration extends Shape
{
    /**
     * @param array{
     *     targetIntervalSeconds?: int<1, 86400>,
     *     storage?: list<'SEQUENTIAL'|'LATEST'>,
     *     recordingMode?: 'INTERVAL'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

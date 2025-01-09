<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $targetIntervalSeconds
 * @property list<'SEQUENTIAL'|'LATEST'> $storage
 * @property 'INTERVAL'|'DISABLED' $recordingMode
 */
class ParticipantThumbnailConfiguration extends Shape
{
    /**
     * @param array{
     *     targetIntervalSeconds?: int,
     *     storage?: list<'SEQUENTIAL'|'LATEST'>,
     *     recordingMode?: 'INTERVAL'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 86400>|null $targetIntervalSeconds
 * @property list<'SEQUENTIAL'|'LATEST'>|null $storage
 * @property 'INTERVAL'|'DISABLED'|null $recordingMode
 */
class ParticipantThumbnailConfiguration extends Shape
{
    /**
     * @param array{
     *     targetIntervalSeconds?: int<1, 86400>|null,
     *     storage?: list<'SEQUENTIAL'|'LATEST'>|null,
     *     recordingMode?: 'INTERVAL'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

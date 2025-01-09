<?php

namespace Sunaoka\Aws\Structures\mgn\ListWaves\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $creationDateTime
 * @property string $description
 * @property bool $isArchived
 * @property string $lastModifiedDateTime
 * @property string $name
 * @property array<string, string> $tags
 * @property WaveAggregatedStatus $waveAggregatedStatus
 * @property string $waveID
 */
class Wave extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     creationDateTime?: string,
     *     description?: string,
     *     isArchived?: bool,
     *     lastModifiedDateTime?: string,
     *     name?: string,
     *     tags?: array<string, string>,
     *     waveAggregatedStatus?: WaveAggregatedStatus,
     *     waveID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

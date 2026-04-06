<?php

namespace Sunaoka\Aws\Structures\mgn\ListWaves\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $waveID
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property bool|null $isArchived
 * @property WaveAggregatedStatus|null $waveAggregatedStatus
 * @property string|null $creationDateTime
 * @property string|null $lastModifiedDateTime
 * @property array<string, string>|null $tags
 */
class Wave extends Shape
{
    /**
     * @param array{
     *     waveID?: string|null,
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     isArchived?: bool|null,
     *     waveAggregatedStatus?: WaveAggregatedStatus|null,
     *     creationDateTime?: string|null,
     *     lastModifiedDateTime?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

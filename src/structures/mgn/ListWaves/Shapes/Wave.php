<?php

namespace Sunaoka\Aws\Structures\mgn\ListWaves\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $creationDateTime
 * @property string|null $description
 * @property bool|null $isArchived
 * @property string|null $lastModifiedDateTime
 * @property string|null $name
 * @property array<string, string>|null $tags
 * @property WaveAggregatedStatus|null $waveAggregatedStatus
 * @property string|null $waveID
 */
class Wave extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     creationDateTime?: string|null,
     *     description?: string|null,
     *     isArchived?: bool|null,
     *     lastModifiedDateTime?: string|null,
     *     name?: string|null,
     *     tags?: array<string, string>|null,
     *     waveAggregatedStatus?: WaveAggregatedStatus|null,
     *     waveID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

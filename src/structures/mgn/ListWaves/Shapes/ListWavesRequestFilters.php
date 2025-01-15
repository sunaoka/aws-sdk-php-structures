<?php

namespace Sunaoka\Aws\Structures\mgn\ListWaves\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isArchived
 * @property list<string>|null $waveIDs
 */
class ListWavesRequestFilters extends Shape
{
    /**
     * @param array{
     *     isArchived?: bool|null,
     *     waveIDs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

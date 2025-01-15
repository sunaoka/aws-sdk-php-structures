<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StopImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $PrefixesFound
 * @property int|null $PrefixesCompleted
 * @property int|null $FilesCompleted
 * @property int|null $EventsCompleted
 * @property int|null $FailedEntries
 */
class ImportStatistics extends Shape
{
    /**
     * @param array{
     *     PrefixesFound?: int|null,
     *     PrefixesCompleted?: int|null,
     *     FilesCompleted?: int|null,
     *     EventsCompleted?: int|null,
     *     FailedEntries?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

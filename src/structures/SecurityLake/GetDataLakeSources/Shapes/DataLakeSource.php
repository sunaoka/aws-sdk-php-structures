<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetDataLakeSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $account
 * @property list<string> $eventClasses
 * @property string $sourceName
 * @property list<DataLakeSourceStatus> $sourceStatuses
 */
class DataLakeSource extends Shape
{
    /**
     * @param array{
     *     account?: string,
     *     eventClasses?: list<string>,
     *     sourceName?: string,
     *     sourceStatuses?: list<DataLakeSourceStatus>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetDataLakeSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $account
 * @property list<string>|null $eventClasses
 * @property string|null $sourceName
 * @property list<DataLakeSourceStatus>|null $sourceStatuses
 */
class DataLakeSource extends Shape
{
    /**
     * @param array{
     *     account?: string|null,
     *     eventClasses?: list<string>|null,
     *     sourceName?: string|null,
     *     sourceStatuses?: list<DataLakeSourceStatus>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

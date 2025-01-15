<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListLogSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $account
 * @property string|null $region
 * @property list<LogSourceResource>|null $sources
 */
class LogSource extends Shape
{
    /**
     * @param array{
     *     account?: string|null,
     *     region?: string|null,
     *     sources?: list<LogSourceResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

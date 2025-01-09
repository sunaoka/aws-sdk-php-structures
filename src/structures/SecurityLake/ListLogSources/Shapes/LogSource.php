<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListLogSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $account
 * @property string $region
 * @property list<LogSourceResource> $sources
 */
class LogSource extends Shape
{
    /**
     * @param array{
     *     account?: string,
     *     region?: string,
     *     sources?: list<LogSourceResource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

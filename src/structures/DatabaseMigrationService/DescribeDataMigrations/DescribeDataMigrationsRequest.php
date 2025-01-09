<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeDataMigrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 * @property bool $WithoutSettings
 * @property bool $WithoutStatistics
 */
class DescribeDataMigrationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     WithoutSettings?: bool,
     *     WithoutStatistics?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

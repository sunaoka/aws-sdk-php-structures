<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeDataMigrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property bool|null $WithoutSettings
 * @property bool|null $WithoutStatistics
 */
class DescribeDataMigrationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     WithoutSettings?: bool|null,
     *     WithoutStatistics?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

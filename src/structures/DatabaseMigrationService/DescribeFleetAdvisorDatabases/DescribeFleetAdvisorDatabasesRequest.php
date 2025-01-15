<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $NextToken
 */
class DescribeFleetAdvisorDatabasesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

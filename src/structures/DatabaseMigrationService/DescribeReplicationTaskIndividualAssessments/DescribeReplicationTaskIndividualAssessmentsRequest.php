<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskIndividualAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeReplicationTaskIndividualAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $NextToken
 */
class DescribeRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterBacktracks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $BacktrackIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBClusterBacktracksRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     BacktrackIdentifier?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterAutomatedBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DbClusterResourceId
 * @property string $DBClusterIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBClusterAutomatedBackupsRequest extends Request
{
    /**
     * @param array{
     *     DbClusterResourceId?: string,
     *     DBClusterIdentifier?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

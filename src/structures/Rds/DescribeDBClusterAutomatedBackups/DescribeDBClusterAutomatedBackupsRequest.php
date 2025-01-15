<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterAutomatedBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DbClusterResourceId
 * @property string|null $DBClusterIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBClusterAutomatedBackupsRequest extends Request
{
    /**
     * @param array{
     *     DbClusterResourceId?: string|null,
     *     DBClusterIdentifier?: string|null,
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

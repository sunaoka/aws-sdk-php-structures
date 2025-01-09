<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeTenantDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $TenantDBName
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int $MaxRecords
 */
class DescribeTenantDatabasesRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string,
     *     TenantDBName?: string,
     *     Filters?: list<Shapes\Filter>,
     *     Marker?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

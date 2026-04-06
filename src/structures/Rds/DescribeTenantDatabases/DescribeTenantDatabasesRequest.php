<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeTenantDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBInstanceIdentifier
 * @property string|null $TenantDBName
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $Marker
 * @property int|null $MaxRecords
 */
class DescribeTenantDatabasesRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string|null,
     *     TenantDBName?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBInstanceAutomatedBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DbiResourceId
 * @property string|null $DBInstanceIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property string|null $DBInstanceAutomatedBackupsArn
 */
class DescribeDBInstanceAutomatedBackupsRequest extends Request
{
    /**
     * @param array{
     *     DbiResourceId?: string|null,
     *     DBInstanceIdentifier?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     DBInstanceAutomatedBackupsArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

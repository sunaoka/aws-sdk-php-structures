<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBInstanceAutomatedBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DbiResourceId
 * @property string $DBInstanceIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 * @property string $DBInstanceAutomatedBackupsArn
 */
class DescribeDBInstanceAutomatedBackupsRequest extends Request
{
    /**
     * @param array{
     *     DbiResourceId?: string,
     *     DBInstanceIdentifier?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     DBInstanceAutomatedBackupsArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

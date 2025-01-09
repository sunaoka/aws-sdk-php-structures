<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBLogFiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $FilenameContains
 * @property int $FileLastWritten
 * @property int $FileSize
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBLogFilesRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     FilenameContains?: string,
     *     FileLastWritten?: int,
     *     FileSize?: int,
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

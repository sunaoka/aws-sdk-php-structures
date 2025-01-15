<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBLogFiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string|null $FilenameContains
 * @property int|null $FileLastWritten
 * @property int|null $FileSize
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBLogFilesRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     FilenameContains?: string|null,
     *     FileLastWritten?: int|null,
     *     FileSize?: int|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

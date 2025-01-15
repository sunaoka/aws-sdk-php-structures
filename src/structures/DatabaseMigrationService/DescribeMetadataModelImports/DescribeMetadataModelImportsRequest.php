<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $Marker
 * @property int|null $MaxRecords
 */
class DescribeMetadataModelImportsRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     Filters?: list<Shapes\Filter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

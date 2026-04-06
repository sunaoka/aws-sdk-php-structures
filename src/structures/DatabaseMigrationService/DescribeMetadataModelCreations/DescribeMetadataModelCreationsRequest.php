<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelCreations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $Marker
 * @property int|null $MaxRecords
 * @property string $MigrationProjectIdentifier
 */
class DescribeMetadataModelCreationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int|null,
     *     MigrationProjectIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

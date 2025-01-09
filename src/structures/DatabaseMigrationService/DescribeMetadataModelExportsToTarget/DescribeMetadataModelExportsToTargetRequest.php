<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelExportsToTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int $MaxRecords
 */
class DescribeMetadataModelExportsToTargetRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     Filters?: list<Shapes\Filter>,
     *     Marker?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

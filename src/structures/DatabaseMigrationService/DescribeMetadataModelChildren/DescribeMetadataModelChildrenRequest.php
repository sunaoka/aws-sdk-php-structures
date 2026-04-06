<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelChildren;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SelectionRules
 * @property string $MigrationProjectIdentifier
 * @property 'SOURCE'|'TARGET' $Origin
 * @property string|null $Marker
 * @property int|null $MaxRecords
 */
class DescribeMetadataModelChildrenRequest extends Request
{
    /**
     * @param array{
     *     SelectionRules: string,
     *     MigrationProjectIdentifier: string,
     *     Origin: 'SOURCE'|'TARGET',
     *     Marker?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

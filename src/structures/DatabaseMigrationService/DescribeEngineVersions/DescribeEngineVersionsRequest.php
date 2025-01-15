<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

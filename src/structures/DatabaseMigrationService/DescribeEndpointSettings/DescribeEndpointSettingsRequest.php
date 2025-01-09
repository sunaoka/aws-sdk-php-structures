<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpointSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngineName
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeEndpointSettingsRequest extends Request
{
    /**
     * @param array{
     *     EngineName: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

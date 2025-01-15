<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpointSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngineName
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeEndpointSettingsRequest extends Request
{
    /**
     * @param array{
     *     EngineName: string,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

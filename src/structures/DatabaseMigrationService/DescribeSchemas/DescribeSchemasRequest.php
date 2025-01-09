<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeSchemasRequest extends Request
{
    /**
     * @param array{
     *     EndpointArn: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

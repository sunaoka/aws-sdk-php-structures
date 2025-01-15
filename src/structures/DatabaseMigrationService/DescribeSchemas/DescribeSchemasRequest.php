<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeSchemasRequest extends Request
{
    /**
     * @param array{
     *     EndpointArn: string,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

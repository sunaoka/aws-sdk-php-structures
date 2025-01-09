<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaId
 * @property string $SchemaName
 * @property string $DatabaseId
 * @property string $DatabaseName
 * @property string $DatabaseIpAddress
 */
class SchemaShortInfoResponse extends Shape
{
    /**
     * @param array{
     *     SchemaId?: string,
     *     SchemaName?: string,
     *     DatabaseId?: string,
     *     DatabaseName?: string,
     *     DatabaseIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

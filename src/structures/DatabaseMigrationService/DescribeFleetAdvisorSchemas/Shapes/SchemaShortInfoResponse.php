<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SchemaId
 * @property string|null $SchemaName
 * @property string|null $DatabaseId
 * @property string|null $DatabaseName
 * @property string|null $DatabaseIpAddress
 */
class SchemaShortInfoResponse extends Shape
{
    /**
     * @param array{
     *     SchemaId?: string|null,
     *     SchemaName?: string|null,
     *     DatabaseId?: string|null,
     *     DatabaseName?: string|null,
     *     DatabaseIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

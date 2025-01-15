<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseId
 * @property string|null $DatabaseName
 * @property string|null $DatabaseIpAddress
 * @property string|null $DatabaseEngine
 */
class DatabaseShortInfoResponse extends Shape
{
    /**
     * @param array{
     *     DatabaseId?: string|null,
     *     DatabaseName?: string|null,
     *     DatabaseIpAddress?: string|null,
     *     DatabaseEngine?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

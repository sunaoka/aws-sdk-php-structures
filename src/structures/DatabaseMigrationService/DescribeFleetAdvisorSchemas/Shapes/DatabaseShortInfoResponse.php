<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseId
 * @property string $DatabaseName
 * @property string $DatabaseIpAddress
 * @property string $DatabaseEngine
 */
class DatabaseShortInfoResponse extends Shape
{
    /**
     * @param array{
     *     DatabaseId?: string,
     *     DatabaseName?: string,
     *     DatabaseIpAddress?: string,
     *     DatabaseEngine?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

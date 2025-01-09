<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerId
 * @property string $IpAddress
 * @property string $ServerName
 */
class ServerShortInfoResponse extends Shape
{
    /**
     * @param array{
     *     ServerId?: string,
     *     IpAddress?: string,
     *     ServerName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
